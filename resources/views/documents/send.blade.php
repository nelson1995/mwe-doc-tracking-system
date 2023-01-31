@extends('documents.basic')

@section('inner-body')

<div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                      
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Send Document</h4>
                                                <div class="nk-block-des">
                                                    <p>Add people to send the document to</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title">Default Preview</span>
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-01">Input text Default</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-01" placeholder="Input placeholder">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-05">Input with Text</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-text-hint">
                                                                        <span class="overline-title">Usd</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="default-05" placeholder="Input placeholder">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Input with Icon Left</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-user"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="default-03" placeholder="Input placeholder">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-04">Input with Icon Right</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-mail"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="default-04" placeholder="Input placeholder">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-textarea">Textarea</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea class="form-control form-control-simple no-resize" id="default-textarea">Large text area content</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-06">Default File Upload</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="custom-file">
                                                                        <input type="file" multiple="" class="custom-file-input" id="customFile">
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-06">Default Select</label>
                                                                <div class="form-control-wrap ">
                                                                    <div class="form-control-select">
                                                                        <select class="form-control" id="default-06">
                                                                            <option value="default_option">Default Option</option>
                                                                            <option value="option_select_name">Option select name</option>
                                                                            <option value="option_select_name">Option select name</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-07">Default Select Multiple</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-control-select-multiple">
                                                                        <select class="custom-select" id="default-07" multiple="">
                                                                            <option value="option_select0">Default Option</option>
                                                                            <option value="option_select1">Option select name</option>
                                                                            <option value="option_select2">Option select name</option>
                                                                            <option value="option_select2">Option select name</option>
                                                                            <option value="option_select2">Option select name</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="preview-hr">
                                                    <span class="preview-title-lg overline-title">State Preview</span>
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-1-01">Focus State</label>
                                                                <input type="text" class="form-control focus" id="default-1-01" placeholder="Input placeholder">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-1-02">Filled State</label>
                                                                <input type="text" class="form-control" id="default-1-02" value="Abu Bin Ishtiyak">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-1-04">Error State</label>
                                                                <input type="text" class="form-control error" id="default-1-04" placeholder="Input placeholder">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-1-03">Disabled State</label>
                                                                <input type="text" class="form-control" id="default-1-03" disabled="" value="info@softnio.com">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="preview-hr">
                                                    <span class="preview-title-lg overline-title">Size Preview </span>
                                                    <div class="row gy-4 align-center">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control form-control-lg" placeholder="Input Large">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" placeholder="Input Regular">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control form-control-sm" placeholder="Input Small">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="text-soft">Use <code>.form-control-lg</code> or <code>.form-control-sm</code> with <code>.form-control</code> for large or small input box.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#formElements" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="formElements"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"default-01"</span><span class="tag">&gt;</span><span class="pln">Input text label</span><span class="tag">&lt;/label&gt;</span><span class="pln">
    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-control-wrap"</span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"default-01"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pun">=</span><span class="atv">"Input placeholder"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"default-02"</span><span class="tag">&gt;</span><span class="pln">Textarea label</span><span class="tag">&lt;/label&gt;</span><span class="pln">
    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-control-wrap"</span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;textarea</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"default-textarea"</span><span class="tag">&gt;</span><span class="pln">Large text area content</span><span class="tag">&lt;/textarea&gt;</span><span class="pln">
    </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Select with Select2</h4>
                                                <div class="nk-block-des">
                                                    <p>Using <code>.form-select</code> class in <code class="code-tag">&lt;select&gt;</code> element to replace browser default style with <a href="https://select2.org/" target="_blank">Select2</a>, as its give you a customizable select box with support for searching, tagging, and many other highly used options. For the documentation for Select2, that can be found <a href="https://select2.org/" target="_blank">here</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row gy-4">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Select2 Default</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control-lg select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                                    <option value="default_option" data-select2-id="3">Default Option</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 445px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-efue-container"><span class="select2-selection__rendered" id="select2-efue-container" role="textbox" aria-readonly="true" title="Default Option">Default Option</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Select2 With Search</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control-lg select2-hidden-accessible" data-search="on" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                                    <option value="default_option" data-select2-id="6">Default Option</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 445px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-v77o-container"><span class="select2-selection__rendered" id="select2-v77o-container" role="textbox" aria-readonly="true" title="Default Option">Default Option</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Select2 Multiple</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select select2-hidden-accessible" multiple="" data-placeholder="Select Multiple options" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                                                    <option value="default_option">Default Option</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                    <option value="option_select_name">Option select name</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 143.484px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select Multiple options" style="width: 437px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <p class="text-soft">For large or small size of Select2, use <code>lg</code>, <code>sm</code> in <code>data-ui=""</code> attribute of <code class="code-tag">&lt;select&gt;</code> element. And you can use <code>on</code> in <code>data-search=""</code> attribute to display search option in select2.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#select2Elements" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="select2Elements"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-label"</span><span class="tag">&gt;</span><span class="pln">Select2 Default</span><span class="tag">&lt;/label&gt;</span><span class="pln">
    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-control-wrap"</span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;select</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-select"</span><span class="tag">&gt;</span><span class="pln">
            ...
        </span><span class="tag">&lt;/select&gt;</span><span class="pln">
    </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Date Picker</h4>
                                                <div class="nk-block-des">
                                                    <p>Using <code>.date-picker</code>, <code>.date-picker-alt</code> class in <code class="code-tag">&lt;input&gt;</code> element to enable datepicker. <br>We have used <a href="https://github.com/uxsolutions/bootstrap-datepicker/" target="_blank">Bootstrap Datepicker</a> for date picker, here you see full <a href="https://bootstrap-datepicker.readthedocs.io/en/stable/" target="_blank">documentation here</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row gy-4">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Datepicker</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control date-picker">
                                                            </div>
                                                            <div class="form-note">Date format <code>mm/dd/yyyy</code></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Datepicker Alt</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control date-picker-alt" data-date-format="yyyy-mm-dd">
                                                            </div>
                                                            <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Datepicker with Icon</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-left">
                                                                    <em class="icon ni ni-calendar"></em>
                                                                </div>
                                                                <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd">
                                                            </div>
                                                            <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Datepicker Alt with Icon</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-calendar-alt"></em>
                                                                </div>
                                                                <input type="text" class="form-control date-picker">
                                                            </div>
                                                            <div class="form-note">Date format <code>mm/dd/yyyy</code></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <p class="text-soft">Additionally you can use <code>data-date-format=""</code> attribute of <code class="code-tag">&lt;input&gt;</code> element to formate date. Default format <code>mm/dd/yyyy</code>.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#DatePickerCode" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="DatePickerCode"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-label"</span><span class="tag">&gt;</span><span class="pln">Select2 Default</span><span class="tag">&lt;/label&gt;</span><span class="pln">
    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-control-wrap"</span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;select</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-select"</span><span class="tag">&gt;</span><span class="pln">
            ...
        </span><span class="tag">&lt;/select&gt;</span><span class="pln">
    </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Time Picker</h4>
                                                <div class="nk-block-des">
                                                    <p>Using <code>.time-picker</code> class in <code class="code-tag">&lt;select&gt;</code> element to enable time picker. <br>We have used <a href="https://timepicker.co/" target="_blank">Bootstrap Timepicker</a> for date picker, here you see full <a href="https://timepicker.co/" target="_blank">documentation here</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row gy-4">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Timepicker</label>
                                                            <div class="form-control-wrap has-timepicker">
                                                                <input type="text" class="form-control time-picker" placeholder="Input placeholder">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <p class="text-soft">Additionally you can use <code>some_thing_else</code> attribute of <code class="code-tag">&lt;input&gt;</code> element.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#timePickerCode" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="timePickerCode"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-label"</span><span class="tag">&gt;</span><span class="pln">Select2 Default</span><span class="tag">&lt;/label&gt;</span><span class="pln">
    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-control-wrap"</span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;select</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-select"</span><span class="tag">&gt;</span><span class="pln">
            ...
        </span><span class="tag">&lt;/select&gt;</span><span class="pln">
    </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Checkbox Styles</h4>
                                                <div class="nk-block-des">
                                                    <p>To create custom control, wrapped with <code class="code-tag">&lt;div&gt;</code> each checkbox <code class="code-tag">&lt;input&gt;</code> &amp; <code class="code-tag">&lt;label&gt;</code> using <code>.custom-control</code>, <code>.custom-checkbox</code> classes.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row gy-4">
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Default</span>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">Option Label</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Checked</span>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" checked="" id="customCheck2">
                                                                <label class="custom-control-label" for="customCheck2">Option Label</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Disabled</span>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" disabled="" id="customCheck3">
                                                                <label class="custom-control-label" for="customCheck3">Option Label</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Check Disabled</span>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" checked="" disabled="" id="customCheck4">
                                                                <label class="custom-control-label" for="customCheck4">Option Label</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Size</span>
                                                            <div class="g-3 align-center flex-wrap">
                                                                <div class="g">
                                                                    <div class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                                        <label class="custom-control-label" for="customCheck7">Option Label</label>
                                                                    </div>
                                                                </div>
                                                                <div class="g">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                                        <label class="custom-control-label" for="customCheck6">Option Label</label>
                                                                    </div>
                                                                </div>
                                                                <div class="g">
                                                                    <div class="custom-control custom-control-lg custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                                        <label class="custom-control-label" for="customCheck5">Option Label</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <p class="text-soft">For large or small size of <code>.custom-checkbox</code>, use <code>.custom-control-{lg|sm}</code> with <code>.custom-control</code> class.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#checkStyle" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="checkStyle"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control custom-checkbox"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control-input"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"customCheck1"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"customCheck1"</span><span class="tag">&gt;</span><span class="pln">Option Label</span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control custom-control-lg custom-checkbox"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control-input"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"customCheck2"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"customCheck2"</span><span class="tag">&gt;</span><span class="pln">Option Label</span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Radio Style</h4>
                                                <div class="nk-block-des">
                                                    <p>To create custom control, wrapped with <code class="code-tag">&lt;div&gt;</code> each radio <code class="code-tag">&lt;input&gt;</code> &amp; <code class="code-tag">&lt;label&gt;</code> using <code>.custom-control</code>, <code>.custom-radio</code> classes.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row gy-4">
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Default</span>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio1">Option Label</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Checked</span>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio2" name="customRadio" checked="" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio2">Option Label</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Disabled</span>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio3" name="customRadio" disabled="" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio3">Option Label</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Check Disabled</span>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio4" name="customRadio1" checked="" disabled="" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio4">Option Label</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Size</span>
                                                            <div class="g-4 align-center flex-wrap">
                                                                <div class="g">
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="radioSize" id="customRadio7">
                                                                        <label class="custom-control-label" for="customRadio7">Option Label</label>
                                                                    </div>
                                                                </div>
                                                                <div class="g">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="radioSize" id="customRadio6">
                                                                        <label class="custom-control-label" for="customRadio6">Option Label</label>
                                                                    </div>
                                                                </div>
                                                                <div class="g">
                                                                    <div class="custom-control custom-control-lg custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="radioSize" id="customRadio5">
                                                                        <label class="custom-control-label" for="customRadio5">Option Label</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <p class="text-soft">For large or small size of <code>.custom-radio</code>, use <code>.custom-control-{lg|sm}</code> with <code>.custom-control</code> class.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#radioStyle" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="radioStyle"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control custom-radio"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"radio"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"customRadio1"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"customRadio"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control-input"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"customRadio1"</span><span class="tag">&gt;</span><span class="pln">Radio</span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control custom-control-lg custom-radio"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"radio"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"customRadio2"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"customRadio"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control-input"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"customRadio2"</span><span class="tag">&gt;</span><span class="pln">Radio</span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Switch Style</h4>
                                                <div class="nk-block-des">
                                                    <p>The switch markup of a <code>.custom-control</code> <code class="code-fnc">checkbox</code> but uses the <code>.custom-switch</code> class to render a toggle switch.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row gy-4">
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Default</span>
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                                <label class="custom-control-label" for="customSwitch1">Switch</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Checked</span>
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" checked="" id="customSwitch2">
                                                                <label class="custom-control-label" for="customSwitch2">Switch</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Disabled</span>
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" disabled="" id="customSwitch3">
                                                                <label class="custom-control-label" for="customSwitch3">Switch</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Check Disabled</span>
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" checked="" disabled="" id="customSwitch4">
                                                                <label class="custom-control-label" for="customSwitch4">Switch</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="preview-block">
                                                            <span class="preview-title overline-title">Size</span>
                                                            <div class="g-3 align-center flex-wrap">
                                                                <div class="g">
                                                                    <div class="custom-control custom-control-sm custom-switch">
                                                                        <input type="checkbox" class="custom-control-input" id="customSwitch7">
                                                                        <label class="custom-control-label" for="customSwitch7">Switch Label</label>
                                                                    </div>
                                                                </div>
                                                                <div class="g">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                                                        <label class="custom-control-label" for="customSwitch6">Switch Label</label>
                                                                    </div>
                                                                </div>
                                                                <div class="g">
                                                                    <div class="custom-control custom-control-lg custom-switch">
                                                                        <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                                                        <label class="custom-control-label" for="customSwitch5">Switch Label</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <p class="text-soft">For large or small size of <code>.custom-switch</code>, use <code>.custom-control-{lg|sm}</code> with <code>.custom-control</code> class.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="code-block">
                                            <h6 class="overline-title title">Code Example</h6>
                                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#switchStyle" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                            <pre class="prettyprint lang-html" id="switchStyle"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control custom-switch"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control-input"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"customSwitch1"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"customSwitch1"</span><span class="tag">&gt;</span><span class="pln">Switch</span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control custom-control-lg custom-switch"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control-input"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"customSwitch2"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"custom-control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"customSwitch2"</span><span class="tag">&gt;</span><span class="pln">Switch</span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
                                        </div><!-- .code-block -->
                                    </div><!-- .nk-block -->
                                </div>



@endsection