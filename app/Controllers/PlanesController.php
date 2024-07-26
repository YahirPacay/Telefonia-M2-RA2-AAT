<?php

namespace App\Controllers;

use App\Models\PlanesModel; 

class PlanesController extends BaseController
{
    public function index(): string
    {

        $planes = new PlanesModel();
        $datos['datos']=$planes->findAll();

       // print_r($datos);
        return view('planes', $datos);
    }

    public function nuevoPlan()
    {
        return view('planes_nuevos');
    }
    

    public function agregarPlan()
    {
        $id = $this->request->getVar('txtId');
  //      echo 'tu id es= '. $id;
        $nombre = $this->request->getVar('txtNombre');
        $pago = $this->request->getVar('txtPagoMensual');
        $minutos = $this->request->getVar('txtCantidadMinutos');
        $mensajes = $this->request->getVar('txtCantidadMensajes');


        //crear objeto
        $planes = new PlanesModel();
        $datos =[
            'plan_id'=>$id,
            'nombre'=>$nombre,
            'pago_mensual'=>$pago,
            'cantidad_minutos'=>$minutos,
            'cantidad_mensajes'=>$mensajes
        ];
        $planes->insert($datos);
        echo 'Datos Guardatos';

        return redirect()->route('planes');
        
    }

    public function eliminarPlan($id = null)
    {
        $planes = new PlanesModel();
        $planes->delete([$id]);
        return redirect()->route('planes'); 
    }
    public function buscarPlan($id=null)
    {
        //echo $id;
        $planes = new PlanesModel();
        //select * from planes where plan_id=$id;
        $datos['datos']=$planes->where('plan_id',$id)->first();
       // print_r($datos);
        return view('form_modificar_plan', $datos);
    }

    public function modificarPlan()
    {
        $planes = new PlanesModel();
        $datos = [
            'plan_id'=>$this->request->getVar('txtPlanId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'pago_mensual'=>$this->request->getVar('txtPagoMensual'),
            'cantidad_minutos'=>$this->request->getVar('txtCantidadMinutos'),
            'cantidad_mensajes'=>$this->request->getVar('txtCantidadMensajes')
        ];
        //print_r($datos);
        //update (primary key, campos y datos)
        $planes->update($datos['plan_id'],$datos);

        return redirect()->route('planes');


    }

}
