@extends('documents.basic')
@section('view-document')
    @if($extension === "pdf")
        <iframe src="{{ $file_path }}" frameborder="0" style="width:100%;min-height:640px;"></iframe>
    @elseif($extension === "docx" || $extension === "doc")
        <iframe src="{{$file_path}}" style="width:100%;min-height:640px;" frameborder='0'>This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.</iframe>
        <!-- <iframe src='https://docs.google.com/gview?url=<?php echo $file_path; ?>&embedded=true'  frameborder='0' style="width:100%;min-height:640px;">This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.</iframe> -->
    @elseif($extension === "xls" || $extension === "xlsx")
        <iframe src="{{$file_path}}" style="width:100%;min-height:640px;" frameborder='0'>This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.</iframe>
    @endif
@endsection