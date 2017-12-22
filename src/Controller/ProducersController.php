<?php
namespace App\Controller;
use Cake\Event\Event;
use App\Controller\AppController;

/**
 * Producers Controller
 *
 * @property \App\Model\Table\ProducersTable $Producers
 *
 * @method \App\Model\Entity\Producer[] paginate($object = null, array $settings = [])
 */
class ProducersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
	 public function initialize()
	 {
		parent::initialize();
		$this->loadComponent('Upload');
	 }
	 
    public function index()
    {
        $this->paginate = [
            'contain' => ['Services', 'Companies']
        ];
        $producers = $this->paginate($this->Producers);

        $this->set(compact('producers'));
        $this->set('_serialize', ['producers']);
    }

    /**
     * View method
     *
     * @param string|null $id Producer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $producer = $this->Producers->get($id, [
            'contain' => ['Services', 'Companies', 'Payments']
        ]);

        $this->set('producer', $producer);
        $this->set('_serialize', ['producer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
		$title = 'Add Collection';
		$this->set(compact('title'));
		
        $producer = $this->Producers->newEntity();
        if ($this->request->is('post')) {
            $producer = $this->Producers->patchEntity($producer, $this->request->getData());
			$image = $this->request->data['picture'];
			$name = $this->request->data['name'];
			if(isset($image['name']) && !empty($image['name'])){
                $this->Upload->upload($image);
                
			if($this->Upload->uploaded) {
                    $this->Upload->file_new_name_body = $name;
                    $this->Upload->process('img/collection/');
                    $profileImage = $this->Upload->file_dst_name;
                    
					$producer->picture  = $profileImage;
			}
		  } else {
			unset($this->request->data['picture']); 
		  }
            if ($this->Producers->save($producer)) {
                $this->Flash->success(__('The producer has been saved.'));

                return $this->redirect(['controller' => 'companies', 'action' => 'profile', $id]);
            }
            $this->Flash->error(__('The producer could not be saved. Please, try again.'));
        }
        $services = $this->Producers->Services->find('list', ['limit' => 200]);
        $companies = $this->Producers->Companies->find('list', ['limit' => 200]);
        $this->set(compact('producer', 'services', 'companies'));
        $this->set('_serialize', ['producer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Producer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $producer = $this->Producers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $producer = $this->Producers->patchEntity($producer, $this->request->getData());
            if ($this->Producers->save($producer)) {
                $this->Flash->success(__('The producer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producer could not be saved. Please, try again.'));
        }
        $services = $this->Producers->Services->find('list', ['limit' => 200]);
        $companies = $this->Producers->Companies->find('list', ['limit' => 200]);
        $this->set(compact('producer', 'services', 'companies'));
        $this->set('_serialize', ['producer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Producer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producer = $this->Producers->get($id);
        if ($this->Producers->delete($producer)) {
            $this->Flash->success(__('The producer has been deleted.'));
        } else {
            $this->Flash->error(__('The producer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function allcollection($id = null, $sname = null)
    {
		$title = $sname;
		$this->set(compact('title'));
		
		$producer = $this->Producers->find('all', [
			'contain' => ['Services', 'Companies'],
			'conditions' => array('service_id' => $id)
        ]);

        $this->set('producer', $producer);
        $this->set('_serialize', ['producer']);
		
		$this->set('serName', $sname);
    }
	
	public function search(){
		$title = 'Search';
		$this->set(compact('title'));
		if($this->request->is(['patch','post','put'])){
			$search=$this->request->data['search'];
			$producer = $this->Producers->find('all', [
			'contain' => array('Services', 'Companies'),
			'conditions' => array('AND' => array('producers.name LIKE' => '%'.$search.'%'))]);
			$this->set('producer', $producer);
			$this->set('_serialize', ['producer']);
		}else{
			$producer = null;
			$this->set(compact('producer'));
		}
		
		$this->set('search', $search);
	}
	
	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('allcollection');
		$this->Auth->allow('search');
    }
}
