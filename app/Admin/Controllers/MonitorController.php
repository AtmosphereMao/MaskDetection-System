<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Monitor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class MonitorController extends Controller
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Monitor';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Monitor());




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
        $show = new Show(Monitor::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Monitor());



        return $form;
    }

    public function index(Content $content){
        return $content
            ->title('口罩佩戴检测')
            ->description('监控视频')
            ->row(function (Row $row) {

                $row->column(8, function (Column $column) {
                    $column->append(view('components.admin.monitor', [
                        'video_url' => 'test'
                    ]));
                });
                $row->column(4, function (Column $column) {
                    $column->append(view('components.admin.monitor', [
                        'video_url' => 'test'
                    ]));
                });


            });

    }


}
