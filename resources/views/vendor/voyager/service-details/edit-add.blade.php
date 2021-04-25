@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <style>
        input
        {
            background: #f9f9fc !important;
            height: 56px !important;
            border: 1px #dbdce3 solid !important;
            box-shadow: 1px 1px 0px rgba(0,0,0,0.4);
            color: black;
        }
        .rotate
        {
            transition: 0.5s;
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        .form-control
        {
            color: rgba(0, 0, 0, 0.87);
            font-weight: 400;
            font-family: "Poppins", sans-serif;
            font-size: 16px;
        }
        .title-input
        {
            font-weight: 800;
            font-size: 18px;
            color: rgba(0, 0, 0, 0.93);
        }
        .control-label
        {
            font-size: 17px;
            color: #FFFFFF;
            font-weight: 500;
        }
    </style>

    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="list-group-item active">
                </div>
                <div class="panel " id="general_information">
                    <!-- form start -->
                    <form role="form"
                          class="form-edit-add"
                          action="{{ $edit ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) : route('voyager.'.$dataType->slug.'.store') }}"
                          method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                    @if($edit)
                        {{ method_field("PUT") }}
                    @endif

                    <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        <!-- Adding / Editing -->
                            @php
                                $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                            @endphp

                            @foreach($dataTypeRows as $row)
                            <!-- GET THE DISPLAY OPTIONS -->
                                @php
                                    $display_options = $row->details->display ?? NULL;
                                    if ($dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')}) {
                                        $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')};
                                    }
                                @endphp
                                @if (isset($row->details->legend) && isset($row->details->legend->text))
                                    <legend class="text-{{ $row->details->legend->align ?? 'center' }}" style="background-color: {{ $row->details->legend->bgcolor ?? '#f0f0f0' }};padding: 5px;">{{ $row->details->legend->text }}</legend>
                                @endif

                                <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width ?? 12 }}
                                {{ $errors->has($row->field) ? 'has-error' : '' }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                                    {{ $row->slugify }}
                                    <label class="control-label" for="name">{{ $row->getTranslatedAttribute('display_name') }}</label>
                                    @include('voyager::multilingual.input-hidden-bread-edit-add')
                                    @if (isset($row->details->view))
                                        @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'action' => ($edit ? 'edit' : 'add'), 'view' => ($edit ? 'edit' : 'add'), 'options' => $row->details])
                                    @elseif ($row->type == 'relationship')
                                        @include('voyager::formfields.relationship', ['options' => $row->details])
                                    @else
                                        {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                                    @endif

                                    @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                        {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                    @endforeach
                                    @if ($errors->has($row->field))
                                        @foreach ($errors->get($row->field) as $error)
                                            <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach

                            <div class="form-group  col-md-12" style="margin-top: 28px">
                                <h4 class="control-label bold" for="name">Service</h4>
                                <ul class="radio">
                                    @foreach ($services as $service)
                                        <li>
                                            <input required="" type="radio" id="option-formateur-radio{{$service->id}}" name="service_id" value="{{$service->id}}"   {{$edit ? $service->id===$dataTypeContent->service_id ? 'checked' : '' :'' }}>
                                            <label for="option-formateur-radio{{$service->id}}">{{$service->name}}</label>
                                            <div class="check"></div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                                @if($edit)
                                    <div class="col-md-12 list-group-item " style="margin: 25px 0">
                                        <h3 style="padding: 15px 0"> Details</h3>
                                    @foreach (json_decode($dataTypeContent->details) as $property)
                                        <div class="list-group list{{$loop->index}}">
                                            <div class="list-group-item active col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="title">Title ({{$loop->index+1}})</label>
                                                    <input type="text" class="form-control  title-input" name="details[{{$loop->index}}][title]" value="{{ $property->title }}" id="title">
                                                </div>
                                            </div>
                                            <div class="list-group-item active col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="description">description ({{$loop->index+1}})</label>
                                                    <input type="text" class="form-control" name="details[{{$loop->index}}][description]" value="{{ $property->description }}" id="description">
                                                </div>
                                            </div>
                                            @if($loop->last)
                                                <div class="list-group-item col-md-12">
                                                    <div class="d-flex text-end justify-content-end text-right">
                                                        <button type="button" class="btn btn-primary btn-lg add" data-id="{{$loop->count}}" style="font-size: 16px;padding: 10px" >
                                                            Add details
                                                             <span class="glyphicon glyphicon-plus-sign"></span></button>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                            @endforeach
                                            <div class="field-details">

                                            </div>
                                        </div>
                                        <div class="col-md-12 list-group-item" style="margin: 25px 0">
                                            <h3 style="padding: 15px 0"> Features</h3>
                                            <div class="list-group list1">
                                                @foreach (json_decode($dataTypeContent->features) as $property)
                                                    <div class="list-group list{{$loop->index}}">
                                                        <div class="list-group-item active col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label" for="title">Title {{$loop->index+1}}</label>
                                                                <input type="text" class="form-control  title-input" name="features[{{$loop->index}}][title]" value="{{ $property->title }}" id="title">
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item active col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label" for="description">Description {{$loop->index+1}}</label>
                                                                <input type="text" class="form-control" name="features[{{$loop->index}}][description]" value="{{ $property->description }}" id="description">
                                                            </div>
                                                        </div>
                                                        @if($loop->last)
                                                            <div class="list-group-item col-md-12">
                                                                <div class="d-flex text-end justify-content-end text-right">
                                                                    <button type="button" class="btn btn-primary btn-lg ajouter" data-id="{{$loop->count}}" style="font-size: 16px;padding: 10px" >
                                                                   Add feature
                                                                        <span class="glyphicon glyphicon-plus-sign"></span></button>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endforeach
                                                <div class="field-features"></div>
                                            </div>


                            @else
                                <div class="col-md-12 list-group-item " style="margin: 25px 0">
                                    <h3 style="padding: 15px 0"> Details</h3>
                                    <div class="list-group list1">
                                        <div class="list-group-item active col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="title">Title</label>
                                                <input type="text" class="form-control  title-input" name="details[0][title]" placeholder="Title " id="title">
                                            </div>
                                        </div>
                                        <div class="list-group-item active col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="description">Description</label>
                                                <input type="text" class="form-control" name="details[0][description]" placeholder="description... " id="description">
                                            </div>
                                        </div>
                                        <div class="list-group-item col-md-12">
                                            <div class="d-flex text-end justify-content-end text-right">
                                                <button type="button" class="btn btn-primary btn-lg add" data-id="0" style="font-size: 16px;padding: 10px" > Add a details
                                                    <span class="glyphicon glyphicon-plus-sign"></span></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field-details">
                                    </div>
                                </div>
                                    <div class="col-md-12 list-group-item" style="margin: 25px 0">
                                        <h3 style="padding: 15px 0"> Features</h3>
                                        <div class="list-group list1">
                                            <div class="list-group-item active  col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="title">Title</label>
                                                    <input type="text" class="form-control  title-input" name="features[0][title]" placeholder="Title " id="title">
                                                </div>
                                            </div>
                                            <div class="list-group-item active col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="description">Description</label>
                                                    <input type="text" class="form-control" name="features[0][description]" placeholder="description... " id="description">
                                                </div>
                                            </div>
                                            <div class="list-group-item col-md-12">
                                                <div class="d-flex text-end justify-content-end text-right">
                                                    <button type="button" class="btn btn-primary btn-lg ajouter" data-id="0" style="font-size: 16px;padding: 10px" > Add a feature
                                                        <span class="glyphicon glyphicon-plus-sign"></span></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field-features">
                                        </div>
                                    </div>
                            @endif


                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            @section('submit-buttons')
                                <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                            @stop
                            @yield('submit-buttons')
                        </div>
                    </form>

                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                          enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                               onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
@stop

@section('javascript')
    <script>
        var params = {};
        var $file;

        function deleteHandler(tag, isMulti) {
            return function() {
                $file = $(this).siblings(tag);

                params = {
                    slug:   '{{ $dataType->slug }}',
                    filename:  $file.data('file-name'),
                    id:     $file.data('id'),
                    field:  $file.parent().data('field-name'),
                    multi: isMulti,
                    _token: '{{ csrf_token() }}'
                }

                $('.confirm_delete_name').text(params.filename);
                $('#confirm_delete_modal').modal('show');
            };
        }

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                } else if (elt.type != 'date') {
                    elt.type = 'text';
                    $(elt).datetimepicker({
                        format: 'L',
                        extraFormats: [ 'YYYY-MM-DD' ]
                    }).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
            $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
            $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
            $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
            $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));

            $('#confirm_delete').on('click', function(){
                $.post('{{ route('voyager.'.$dataType->slug.'.media.remove') }}', params, function (response) {
                    if ( response
                        && response.data
                        && response.data.status
                        && response.data.status == 200 ) {

                        toastr.success(response.data.message);
                        $file.parent().fadeOut(300, function() { $(this).remove(); })
                    } else {
                        toastr.error("Error removing file.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@stop
