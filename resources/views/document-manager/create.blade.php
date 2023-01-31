@extends('layouts.master')
@section('content')


    <div class="nk-block nk-block-lg">
                                 
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                            <form method="POST" action="{{ route('store_document') }}" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="row g-gs">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fv-full-name">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="fv-full-name" name="nameOfDoc" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fv-email">Address</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="fv-email" name="address" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="select03">Type of document</label>
                                                                <select id="select01" name="typeofdoc" data-toggle="select" class="form-control">
                                                                    @foreach($documentType as $docType)
                                                                        <option selected="active">{{ $docType->type }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="flatpickrSample01">Date of Arrival</label>
                                                                <input id="flatpickrSample01" name="dateofarrival" type="date" class="form-control" placeholder="Flatpickr example" data-toggle="flatpickr" value="today">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="form-label">Upload file</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                                </div>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="docFile" class="custom-file-input" id="inputGroupFile01"
                                                                        aria-describedby="inputGroupFileAddon01">
                                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fv-subject">Author</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="fv-subject" name="author" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fv-message">Comment</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea class="form-control form-control-sm" id="fv-message" name="comment" placeholder="Enter your comments" required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="flatpickrSample01">Date written</label>
                                                                <input id="flatpickrSample01" name="datewritten" type="date" class="form-control" placeholder="Flatpickr example" data-toggle="flatpickr" value="today">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label for="select03">select status</label>
                                                                <select id="select01" name="status" data-toggle="select" class="form-control">
                                                                    <option selected="active">pending</option>
                                                                    <option>received</option>
                                                                    <option>sent</option>
                                                                    <option>completed</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
    
@endsection
