@extends('layouts.layout', ['title'=>'Главная страница'])

@section('content')
    <div class="row projects">
    @foreach($projects as $project)
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $project->project_title }}</h3>
                </div>
                <div class="card-body">
                    <div class="card-descr">{{ $project->project_descr }}</div>
                    <div class="card-status">Статус: {{ $project->project_status }}</div>
                    <div class="card-type">Тип заявки: {{ $project->project_type }}</div>
                    <div class="card-category">Категория: {{ $project->project_category }}</div>
                    <div class="card-sub__category">Подкатегория: {{ $project->project_sub_category }}</div>
                    <div class="card-requirements">Требования к кандидату: {{ $project->project_requirements }}</div>
                    <a href="#" class="btn btn-primary">Откликнуться</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <?php echo $projects->render() ?>
@endsection