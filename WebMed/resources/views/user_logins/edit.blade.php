@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Contas de Usuários
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userLogin, ['route' => ['userLogins.update', $userLogin->id], 'method' => 'patch']) !!}

                        @include('user_logins.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
