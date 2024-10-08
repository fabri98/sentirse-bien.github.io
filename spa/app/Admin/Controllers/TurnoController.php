<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Turno;

class TurnoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Turno';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Turno());

        $grid->column('id', __('Id'));
        $grid->column('id_user', __('Id user'));
        $grid->column('id_servicio', __('Id servicio'));
        $grid->column('fecha_turno', __('Fecha turno'));
        $grid->column('hora_turno', __('Hora turno'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Turno::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('id_user', __('Id user'));
        $show->field('id_servicio', __('Id servicio'));
        $show->field('fecha_turno', __('Fecha turno'));
        $show->field('hora_turno', __('Hora turno'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Turno());

        $form->number('id_user', __('Id user'));
        $form->number('id_servicio', __('Id servicio'));
        $form->date('fecha_turno', __('Fecha turno'))->default(date('Y-m-d'));
        $form->time('hora_turno', __('Hora turno'))->default(time());


        return $form;
    }
}
