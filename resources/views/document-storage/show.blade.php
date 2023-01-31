@extends('document-storage.index')
@section('show-content')
                <div class="nk-fmg-body-head d-none d-lg-flex">
                                        <div class="nk-fmg-search">
                                            <em class="icon ni ni-search"></em>
                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search files, folders">
                                        </div>

                                    </div>
                                    <div class="nk-fmg-body-content">
                                        <div class="nk-block-head nk-block-head-sm">
                                            <div class="nk-block-between position-relative">
                                                <div class="nk-block-head-content">
                                                    <h3 class="nk-block-title page-title"></h3>
                                                </div>
                                                
                                                <div class="search-wrap px-2 d-lg-none" data-search="search">
                                                    <div class="search-content">
                                                        <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                        <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message">
                                                        <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                    </div>
                                                </div><!-- .search-wrap -->
                                            </div>
                                        </div>
                                        <div class="nk-fmg-quick-list nk-block">
                                           
                                        <div class="nk-fmg-listing nk-block">
                                            <!-- .nk-block-head -->
                                            <div class="toggle-expand-content expanded" data-content="recent-files">
                                                <div class="nk-files nk-files-view-group">
                                                    <!-- .nk-files-head -->
                                                    <div class="nk-files-group">
                                                        
                                                    </div>
                                                    <div class="nk-files-group" style="margin-top:60px;">
                                                        <h6 class="title">Files</h6>
                                                        <div class="nk-files-list">
                                                        
                                                            <!-- .nk-file -->
                                                            @foreach($documents as $document)
                                                                <div class="nk-file-item nk-file">
                                                                    <div class="nk-file-info">
                                                                        <div class="nk-file-title">
                                                                            <div class="nk-file-icon">
                                                                                @if($document->format === "docx" || $document->format === "doc" || $document->format === "ots" || $document->format === "odt" )
                                                                                <span class="nk-file-icon-type">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                        <g>
                                                                                            <path d="M50,61H22a6,6,0,0,1-6-6V22l9-11H50a6,6,0,0,1,6,6V55A6,6,0,0,1,50,61Z" style="fill:#599def"></path>
                                                                                            <path d="M25,20.556A1.444,1.444,0,0,1,23.556,22H16l9-11h0Z" style="fill:#c2e1ff"></path>
                                                                                            <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#fff"></rect>
                                                                                            <rect x="27" y="36" width="18" height="2" rx="1" ry="1" style="fill:#fff"></rect>
                                                                                            <rect x="27" y="41" width="18" height="2" rx="1" ry="1" style="fill:#fff"></rect>
                                                                                            <rect x="27" y="46" width="12" height="2" rx="1" ry="1" style="fill:#fff"></rect>
                                                                                        </g>
                                                                                    </svg>
                                                                                </span>
                                                                                @elseif($document->format === "txt")
                                                                                    <span class="nk-file-icon-type">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                            <path d="M50,61H22a6,6,0,0,1-6-6V22l9-11H50a6,6,0,0,1,6,6V55A6,6,0,0,1,50,61Z" style="fill:#7e95c4"></path>
                                                                                            <path d="M25,20.556A1.444,1.444,0,0,1,23.556,22H16l9-11h0Z" style="fill:#b7ccea"></path>
                                                                                            <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#fff"></rect>
                                                                                            <rect x="27" y="35" width="18" height="2" rx="1" ry="1" style="fill:#fff"></rect>
                                                                                            <rect x="27" y="39" width="18" height="2" rx="1" ry="1" style="fill:#fff"></rect>
                                                                                            <rect x="27" y="43" width="14" height="2" rx="1" ry="1" style="fill:#fff"></rect>
                                                                                            <rect x="27" y="47" width="8" height="2" rx="1" ry="1" style="fill:#fff"></rect></svg>
                                                                                    </span>
                                                                                @elseif($document->format === "pdf")
                                                                                    <span class="nk-file-icon-type">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                        <path d="M50,61H22a6,6,0,0,1-6-6V22l9-11H50a6,6,0,0,1,6,6V55A6,6,0,0,1,50,61Z" style="fill:#f26b6b"></path>
                                                                                        <path d="M25,20.556A1.444,1.444,0,0,1,23.556,22H16l9-11h0Z" style="fill:#f4c9c9"></path>
                                                                                        <path d="M46.3342,44.5381a4.326,4.326,0,0,0-2.5278-1.4289,22.436,22.436,0,0,0-4.5619-.3828A19.3561,19.3561,0,0,1,35.82,37.9536a56.5075,56.5075,0,0,0,1.3745-6.0858,2.339,2.339,0,0,0-.4613-1.8444,1.9429,1.9429,0,0,0-1.5162-.753h-.0014a1.6846,1.6846,0,0,0-1.3893.6966c-1.1493,1.5257-.3638,5.219-.1941,5.9457a12.6118,12.6118,0,0,0,.7236,2.1477,33.3221,33.3221,0,0,1-2.49,6.1052,20.3467,20.3467,0,0,0-5.9787,3.4413,2.5681,2.5681,0,0,0-.8861,1.8265,1.8025,1.8025,0,0,0,.6345,1.3056,2.0613,2.0613,0,0,0,1.3942.5313,2.2436,2.2436,0,0,0,1.4592-.5459,20.0678,20.0678,0,0,0,4.2893-5.3578,20.8384,20.8384,0,0,1,5.939-1.1858A33.75,33.75,0,0,0,42.96,47.7858,2.6392,2.6392,0,0,0,46.376,47.55,2.08,2.08,0,0,0,46.3342,44.5381ZM27.6194,49.6234a.8344.8344,0,0,1-1.0847.0413.4208.4208,0,0,1-.1666-.2695c-.0018-.0657.0271-.3147.4408-.736a18.0382,18.0382,0,0,1,3.7608-2.368A17.26,17.26,0,0,1,27.6194,49.6234ZM34.9023,30.848a.343.343,0,0,1,.3144-.1514.6008.6008,0,0,1,.4649.2389.853.853,0,0,1,.1683.6722v0c-.1638.92-.4235,2.381-.8523,4.1168-.0125-.05-.0249-.1-.037-.1506C34.6053,34.0508,34.3523,31.5779,34.9023,30.848ZM33.7231,43.5507a34.9732,34.9732,0,0,0,1.52-3.7664,21.2484,21.2484,0,0,0,2.2242,3.05A21.8571,21.8571,0,0,0,33.7231,43.5507Zm11.7054,2.97a1.3085,1.3085,0,0,1-1.6943.0887,33.2027,33.2027,0,0,1-3.0038-2.43,20.9677,20.9677,0,0,1,2.8346.3335,2.97,2.97,0,0,1,1.7406.9647C45.8377,46.1115,45.6013,46.3483,45.4285,46.5212Z" style="fill:#fff"></path></svg>
                                                                                    </span>
                                                                                @elseif($document->format === "xlsx" || $document->format === "xls" || $document->format === "ods" || $document->format === "ots" )
                                                                                    <span class="nk-file-icon-type">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                            <path d="M50,61H22a6,6,0,0,1-6-6V22l9-11H50a6,6,0,0,1,6,6V55A6,6,0,0,1,50,61Z" style="fill:#36c684"></path>
                                                                                            <path d="M25,20.556A1.444,1.444,0,0,1,23.556,22H16l9-11h0Z" style="fill:#95e5bd"></path>
                                                                                            <path d="M42,31H30a3.0033,3.0033,0,0,0-3,3V45a3.0033,3.0033,0,0,0,3,3H42a3.0033,3.0033,0,0,0,3-3V34A3.0033,3.0033,0,0,0,42,31ZM29,38h6v3H29Zm8,0h6v3H37Zm6-4v2H37V33h5A1.001,1.001,0,0,1,43,34ZM30,33h5v3H29V34A1.001,1.001,0,0,1,30,33ZM29,45V43h6v3H30A1.001,1.001,0,0,1,29,45Zm13,1H37V43h6v2A1.001,1.001,0,0,1,42,46Z" style="fill:#fff"></path></svg>
                                                                                    </span>
                                                                                @endif
                                                                            </div>
                                                                            <div class="nk-file-name">
                                                                                <div class="nk-file-name-text">
                                                                                    <a href="#" class="title">{{ $document->name }} </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="nk-file-desc">
                                                                            <li class="date">{{ $document->date_written }}</li>
                                                                            <li class="members">{{ $document->author }}</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="nk-file-actions">
                                                                        <div class="dropdown">
                                                                            <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <ul class="link-list-plain no-bdr">
                                                                                    <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                    <li><a href="{{ route('view_document',$document->id) }}"><em class="icon ni ni-card-view"></em><span>View</span></a></li>
                                                                                    <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                    <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .nk-file -->
                                                                @endforeach

                                                        </div>
                                                    </div>
                                                </div><!-- .nk-files -->
                                            </div>
                                        </div><!-- .nk-block -->
                                    <!-- .nk-fmg-body-content -->
@endsection