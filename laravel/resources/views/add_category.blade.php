@extends('layouts.head_coach.app_head_coach')

@section ('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Добавление весовой категории</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Заполните основные данные о весовой категории:
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="{{ url('/add_category') }}" method="post" >
								
								{{ csrf_field() }}
								
                                <div class="form-group">
                                    <label>Название категории:</label>
                                    <input class="form-control" name="name" placeholder="Например, до 56 кг">
                                </div>
                                <div class="form-group">
                                    <label>Минимальный вес:</label>
                                    <input class="form-control" name="min_weight" placeholder="Например, 52.100">
                                </div>
                                <div class="form-group">
                                    <label>Максимальный вес:</label>
                                    <input class="form-control" name="max_weight" placeholder="Например, 56.000">
                                </div>

                                <button type="submit" class="btn btn-default">Добавить</button>
                                <!--<button type="reset" class="btn btn-default">Сбросить</button>-->
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->



@endsection