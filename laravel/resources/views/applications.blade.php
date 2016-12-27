@extends('layouts.head_coach.app_head_coach')

@section ('content')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Заявки команд на участие в соревнованиях </h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->

	<p>Выбор весовой категории:</p>
			
	<div class="row">
		
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>№</th>
								<th>Ф.И.О.</th>
								<th>Дата</th>
								<th>Разряд</th>
								<th>Команда</th>
								<th>Тренер</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Мирошниченко Александр</td>
								<td>1990</td>
								<td>МС</td>
								<td>Донецкая</td>
								<td>Осипов</td>
														
							</tr>
							<tr>
								<td>2</td>
								<td>Пневский Роман</td>
								<td>1995</td>
								<td>МС</td>
								<td>Винницкая</td>
								<td>Бэй</td>
								
							</tr>
							<tr>
								<td>3</td>
								<td>Голдин Владимир</td>
								<td>1993</td>
								<td>КМС</td>
								<td>Сумская</td>
								<td>Терещенко</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->

</div>
		
	
	

@endsection