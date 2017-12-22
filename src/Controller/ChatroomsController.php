<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Chatrooms Controller
 *
 * @property \App\Model\Table\ChatroomsTable $Chatrooms
 *
 * @method \App\Model\Entity\Chatroom[] paginate($object = null, array $settings = [])
 */
class ChatroomsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies', 'Users']
        ];
        $chatrooms = $this->paginate($this->Chatrooms);

        $this->set(compact('chatrooms'));
        $this->set('_serialize', ['chatrooms']);
    }

    /**
     * View method
     *
     * @param string|null $id Chatroom id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chatroom = $this->Chatrooms->get($id, [
            'contain' => ['Companies', 'Users']
        ]);

        $this->set('chatroom', $chatroom);
        $this->set('_serialize', ['chatroom']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chatroom = $this->Chatrooms->newEntity();
        if ($this->request->is('post')) {
            $chatroom = $this->Chatrooms->patchEntity($chatroom, $this->request->getData());
            if ($this->Chatrooms->save($chatroom)) {
                $this->Flash->success(__('The chatroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chatroom could not be saved. Please, try again.'));
        }
        $companies = $this->Chatrooms->Companies->find('list', ['limit' => 200]);
        $users = $this->Chatrooms->Users->find('list', ['limit' => 200]);
        $this->set(compact('chatroom', 'companies', 'users'));
        $this->set('_serialize', ['chatroom']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Chatroom id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chatroom = $this->Chatrooms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chatroom = $this->Chatrooms->patchEntity($chatroom, $this->request->getData());
            if ($this->Chatrooms->save($chatroom)) {
                $this->Flash->success(__('The chatroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chatroom could not be saved. Please, try again.'));
        }
        $companies = $this->Chatrooms->Companies->find('list', ['limit' => 200]);
        $users = $this->Chatrooms->Users->find('list', ['limit' => 200]);
        $this->set(compact('chatroom', 'companies', 'users'));
        $this->set('_serialize', ['chatroom']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Chatroom id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null, $pid = null, $nid = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chatroom = $this->Chatrooms->get($id);
        if ($this->Chatrooms->delete($chatroom)) {
            $this->Flash->success(__('The chatroom has been deleted.'));
        } else {
            $this->Flash->error(__('The chatroom could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller' => 'companies', 'action' => 'collection', $pid, $nid]);
    }
	
	public function inbox($cid = null)
    {	
		$title = 'Inbox';
		$this->set(compact('title'));
		
		$chatroom = $this->Chatrooms->find('all', [
            'contain' => ['Companies', 'Users'],
			'conditions' => array('company_id' => $cid)
        ]);

        $this->set('chatroom', $chatroom);
        $this->set('_serialize', ['chatroom']);
		
		$comp = $this->Chatrooms->Companies->find('all')->where(['id'=>$cid]);
		$this->set('comp', $comp);
        $this->set('_serialize', ['comp']);
    }
	
	public function chatroom($cid = null)
    {	
		$title = 'Inbox';
		$this->set(compact('title'));
		
		$chatroom = $this->Chatrooms->find('all', [
            'contain' => ['Companies', 'Users'],
			'conditions' => array('company_id' => $cid)
        ]);

        $this->set('chatroom', $chatroom);
        $this->set('_serialize', ['chatroom']);
		
		$comp = $this->Chatrooms->Companies->find('all')->where(['id'=>$cid]);
		$this->set('comp', $comp);
        $this->set('_serialize', ['comp']);
    }
	
}