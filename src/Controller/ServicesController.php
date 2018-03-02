<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */  

namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Mailer\Email;
use Cake\Routing\Router;

//use Cake\I18n\FrozenDate; 
use Cake\Database\Type; 
//use Cake\I18n\Time;
//use Cake\I18n\Date;
//Type::build('date')->setLocaleFormat('yyyy-MM-dd');

//use Cake\Controller\Component;
// Admin Users Management
class ServicesController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['index']);
        //$this->loadComponent('Imagethumb');
     }   
    
    public $uses = array('User','Service');
     
   
     public function addservice() {
        $this->viewBuilder()->layout('default');
        $this->loadModel('Users');
        $this->loadModel('ServiceTypes'); 
        $user = $this->Users->get($this->Auth->user('id'));
        $id=$this->Auth->user('id');
        $uid = $this->request->session()->read('Auth.User.id');
        $utype = $this->request->session()->read('Auth.User.utype');
        $uverify = $user->check_verified;
        //echo $uverify;exit;
        if($uid!='' && isset($uid) && $utype==2 && $uverify== 'Y'){
        $this->loadModel('Services');
        
        $service = $this->Services->newEntity();
        
        if ($this->request->is('post')) {

            $flag = true;
           
            $tableRegObj = TableRegistry::get('Services');
           
            // Validating Form
            if($this->request->data['service_name'] == ""){
                $this->Flash->error(__('Service Name can not be null. Please, try again.')); $flag = false;
            }
                      
            if($flag){
                  $this->request->data['provider_id']=$id;
                  $this->request->data['is_active']= 1;
                  $this->request->data['step']= 1;
                
                $service = $this->Services->patchEntity($service, $this->request->data);
                if ($rs=$this->Services->save($service)) {
                   
                    //$this->Flash->success('Service added successfully.', ['key' => 'success']);
                    
                    $this->redirect(['action' => 'addservicestep2/'.$rs->id]);
                }
            }
        }
       
        $stname=$this->ServiceTypes->find('all', array('conditions' => array('ServiceTypes.status' =>1)));
        //pr($stname);exit;
        $this->set(compact('service','stname'));
        $this->set('_serialize', ['service']);
        }else{
             $this->Flash->error('You have no permission to access this.');
            return $this->redirect(['controller'=>'Users','action'=>'index']);
        }
    }
    
    
    
    public function addservicestep2($eid=null) {
        $this->viewBuilder()->layout('default');
        $this->loadModel('Users');
        $this->loadModel('Events'); 
        $this->loadModel('Amenities'); 
        $user = $this->Users->get($this->Auth->user('id'));
        $id=$this->Auth->user('id');
        $uid = $this->request->session()->read('Auth.User.id');
        $utype = $this->request->session()->read('Auth.User.utype');
        $uverify = $user->check_verified;
        //echo $uverify;exit;
        if($uid!='' && isset($uid) && $utype==2 && $uverify== 'Y'){
        $this->loadModel('Services');
        
        $service = $this->Services->get($eid);
        
        if ($this->request->is('post')) {

            $flag = true;
           
            $tableRegObj = TableRegistry::get('Services');
           
           
                      
            if($flag){
                  //$this->request->data['provider_id']=$id;
                  //$this->request->data['is_active']= 1;
                
                  $this->request->data['event_id']=implode(',',$this->request->data['event_id']);
                  $this->request->data['amenity_id']=implode(',',$this->request->data['amenity_id']);
                  $this->request->data['step']= 2;
                
                $service = $this->Services->patchEntity($service, $this->request->data);
                if ($this->Services->save($service)) {
                   
                    //$this->Flash->success('Service added successfully.', ['key' => 'success']);
                    
                    $this->redirect(['action' => 'addservicestep3/'.$eid]);
                }
            }
        }
       
        $eventname=$this->Events->find()->where(['Events.status'=>1])->toArray();
        $amenityname=$this->Amenities->find()->where(['Amenities.status'=>1])->toArray();
        //pr($stname);exit;
        $this->set(compact('eventname','amenityname','service'));
        $this->set('_serialize', ['service']);
        }else{
             $this->Flash->error('You have no permission to access this.');
            return $this->redirect(['controller'=>'Users','action'=>'index']);
        }
    }
    
    
    
     public function addservicestep3($eid=null) {
        $this->viewBuilder()->layout('default');
        $this->loadModel('Users');
        $this->loadModel('Events'); 
        $this->loadModel('Amenities'); 
        $user = $this->Users->get($this->Auth->user('id'));
        $id=$this->Auth->user('id');
        $uid = $this->request->session()->read('Auth.User.id');
        $utype = $this->request->session()->read('Auth.User.utype');
        $uverify = $user->check_verified;
        //echo $uverify;exit;
        if($uid!='' && isset($uid) && $utype==2 && $uverify== 'Y'){
        $this->loadModel('Services');
        
        $service = $this->Services->get($eid);
        
        if ($this->request->is('post')) {

            $flag = true;
           
            $tableRegObj = TableRegistry::get('Services');
           
            
                
                 $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
            if (!empty($this->request->data['image']['name'])) {
                $file = $this->request->data['image']; //put the data into a var for easy use
                $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                $fileName = time() . "." . $ext;
                if (in_array($ext, $arr_ext)) {
                    
                    if ($service->image != "" && $service->image != $fileName ) {
                        $filePathDel = WWW_ROOT . 'service_img' . DS . $service->image;
                        if (file_exists($filePathDel)) {
                            unlink($filePathDel);
                        }
                    }                     
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . 'service_img' . DS . $fileName);
                    //$this->Imagethumb->generateThumb(WWW_ROOT .'service_img/', WWW_ROOT."service_img/thumbs/",$thumb_img_width='350', $filename);
                    $file = $fileName;
                    $this->request->data['image'] = $fileName;
                } else {
                    $flag = false;
                    $this->Flash->error(__('Upload image only jpg,jpeg,png files.'));
                }
            } else {
                $this->request->data['image'] = $service->image;
            }
                
                
                  
                  $this->request->data['step']= 3;
                
                $service = $this->Services->patchEntity($service, $this->request->data);
                if ($this->Services->save($service)) {
                   
                    //$this->Flash->success('Service added successfully.', ['key' => 'success']);
                    
                    $this->redirect(['action' => 'listservice/']);
                }
            
        }
       
       
        $this->set(compact('service'));
        $this->set('_serialize', ['service']);
        }else{
             $this->Flash->error('You have no permission to access this.');
            return $this->redirect(['controller'=>'Users','action'=>'index']);
        }
    }
    
    
    
    
    public function listservice() {
        $this->viewBuilder()->layout('default');
        $this->loadModel('Services');
        $this->loadModel('Users');
        $user = $this->Users->get($this->Auth->user('id'));
        $uid = $this->request->session()->read('Auth.User.id');
        $utype = $this->request->session()->read('Auth.User.utype');
        $uverify = $user->check_verified;
        $conditions = ['Services.provider_id'=>$uid];
           
        $this->paginate = [
            'conditions' => $conditions,
            'order' => [ 'id' => 'DESC'],
            'limit'=> 10
        ];
        $service = $this->paginate($this->Services);
        //pr($user->toArray());
        $this->set(compact('service','user'));
        $this->set('_serialize', ['service']);
 
    }
    
    public function editservice($eid = null) {
        $this->viewBuilder()->layout('other_layout');
        $this->loadModel('Users');
        $this->loadModel('Services');
        $this->loadModel('ServiceTypes');
        
        $service = $this->Services->get($eid);
        $user = $this->Users->get($this->Auth->user('id'));
        $id=$this->Auth->user('id');
        $uid = $this->request->session()->read('Auth.User.id');
        $utype = $this->request->session()->read('Auth.User.utype');
        $uverify = $user->check_verified;
        if ($this->request->is(['post', 'put'])) {
            //pr($this->request->data); exit;
            $flag = true;
            if($this->request->data['service_name'] == ""){
                $this->Flash->error(__('service Name can not be null. Please, try again.')); $flag = false;
            }
           
            
                        
            if($flag){
                
               
                $service = $this->Services->patchEntity($service, $this->request->data);
                
                if ($this->Services->save($service)) {
                    
                    
                    $this->Flash->success(__('Information has been edited successfully.'));
                    return $this->redirect(['action' => 'addservicestep2/'.$eid]);
                } else {
                    $this->Flash->error(__('Service could not be edit. Please, try again.'));
                    return $this->redirect(['action' => 'listservice']);
                }
            } else {
                return $this->redirect(['action' => 'editservice/'.$eid]);
            }           
        }
        
        
        $stname=$this->ServiceTypes->find('all', array('conditions' => array('ServiceTypes.status' =>1)));
       
        $this->set(compact('service','stname'));
        $this->set('_serialize', ['service']);
    }
    
   public function servicedelete($eid = null) {
        $this->loadModel('Services');
        $services = $this->Services->get($eid);
        if ($this->Services->delete($services)) {
            $this->Flash->success(__('Service has been deleted.'));
        } else {
            $this->Flash->error(__('Service could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'listservice']);
    } 
}
