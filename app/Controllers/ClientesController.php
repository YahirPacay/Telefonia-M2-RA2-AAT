<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use CodeIgniter\Model;

class ClientesController extends BaseController
{
    public function index(): string
    {
        $clientes = new ClienteModel();
        $datos['datos'] = $clientes->findAll();
        return view('clientes', $datos);
    }


    public function nuevoCliente(): string
    {
        return view('clientes_nuevos');
    }




    public function agregarCliente()
    {
        /*    $id = $this->request->getVar('txtId');
        $nombre = $this->request->getVar('txtNombre');
        $apellido = $this->request->getVar('txtApellido');
        $correo = $this->request->getVar('txtCorreo');                    <- lo que esta abajo ($datos)es la manera simplificada
        $calleAvenida = $this->request->getVar('txtCalleAvenida');           que hacer esto y despues asignarlo como en 
        $noCasa = $this->request->getVar('txtNoCasa');                       el ejemplo de planes.
        $zona = $this->request->getVar('txtZona');
    
    */

        $clientes = new ClienteModel();
        $datos = [
            'cliente_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'correo_electronico' => $this->request->getVar('txtCorreo'),
            'calle_avenida' => $this->request->getVar('txtCalleAvenida'),
            'no_casa' => $this->request->getVar('txtNoCasa'),
            'zona' => $this->request->getVar('txtZona')
        ];

        //  print_r($datos);
        $clientes->insert($datos);
        echo 'Datos Guardados';

        return redirect()->route('cliente');
    }

    public function eliminarCliente($id = null)
    {
        // echo $id;

        $clientes = new ClienteModel();
        $clientes->delete([$id]);
        return redirect()->route('cliente');
    }
    public function buscarCliente($id = null)
    {
        $clientes = new ClienteModel();
        $datos['datos']=$clientes->where('cliente_id',$id)->first();
        //print_r($datos);
        return view('form_modificar_clientes', $datos);
    }

    public function modificarCliente()
    {
        $clientes = new ClienteModel();
        $datos = [
            'cliente_id'=> $this->request->getVar('txtId'),
            'nombre'=> $this->request->getVar('txtNombre'),
            'apellido'=> $this->request->getVar('txtApellido'),
            'correo_electronico'=> $this->request->getVar('txtCorreo'),
            'calle_avenida'=>$this->request->getVar('txtCalleAvenida'),
            'no_casa'=>$this->request->getVar('txtNoCasa'),
            'zona'=>$this->request->getVar('txtZona')
        ];
     //   print_r($datos);
        $clientes->update($datos['cliente_id'],$datos);
        
         return redirect()->route('cliente');
    }
}
