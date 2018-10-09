<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
<?php
/**
 * @var \{{ namespace }}\View\AppView $this
 * @var \{{ entityClass }} ${{ singularVar }}
 */
$this->layout = "CakePagesTemplate.admin";
$templatesPages = [
    // Used for button elements in button().
    'button' => '<button{{attrs}}>{{text}}</button>',
    // Used for checkboxes in checkbox() and multiCheckbox().
    'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
    // Input group wrapper for checkboxes created via control().
    'checkboxFormGroup' => '{{label}}',
    // Wrapper container for checkboxes.
    'checkboxWrapper' => '<div class="checkbox">{{label}}</div>',
    // Widget ordering for date/time/datetime pickers.
    'dateWidget' => '{{year}}{{month}}{{day}}{{hour}}{{minute}}{{second}}{{meridian}}',
    // Error message wrapper elements.
    'error' => '<div class="error-message">{{content}}</div>',
    // Container for error items.
    'errorList' => '<ul>{{content}}</ul>',
    // Error item wrapper.
    'errorItem' => '<li>{{text}}</li>',
    // File input used by file().
    'file' => '<input type="file" name="{{name}}"{{attrs}}>',
    // Fieldset element used by allControls().
    'fieldset' => '<fieldset{{attrs}}>{{content}}</fieldset>',
    // Open tag used by create().
    'formStart' => '<form{{attrs}} role="form">',
    // Close tag used by end().
    'formEnd' => '</form>',
    // General grouping container for control(). Defines input/label ordering.
    'formGroup' => '{{label}}{{input}}',
    // Wrapper content used to hide other content.
    'hiddenBlock' => '<div style="display:none;">{{content}}</div>',
    // Generic input element.
    'input' => '<input type="{{type}}" class="form-control" name="{{name}}"{{attrs}}/>',
    // Submit input element.
    'inputSubmit' => '<input type="{{type}}"{{attrs}} />',
    // Container element used by control().
    'inputContainer' => ' <div class="col-md-12"><div class="form-group form-group-default {{type}}{{required}}">{{content}}</div></div>',
    // Container element used by control() when a field has an error.
    'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
    // Label element when inputs are not nested inside the label.
    'label' => '<label{{attrs}}>{{text}}</label>',
    // Label element used for radio and multi-checkbox inputs.
    'nestingLabel' => '{{hidden}}<label{{attrs}}>{{input}}{{text}}</label>',
    // Legends created by allControls()
    'legend' => '<legend>{{text}}</legend>',
    // Multi-Checkbox input set title element.
    'multicheckboxTitle' => '<legend>{{text}}</legend>',
    // Multi-Checkbox wrapping container.
    'multicheckboxWrapper' => '<fieldset{{attrs}}>{{content}}</fieldset>',
    // Option element used in select pickers.
    'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
    // Option group element used in select pickers.
    'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
    // Select element,
    'select' => '<select name="{{name}}"{{attrs}}>{{content}}</select>',
    // Multi-select element,
    'selectMultiple' => '<select name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
    // Radio input element,
    'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}>',
    // Wrapping container for radio input/label,
    'radioWrapper' => '{{label}}',
    // Textarea input element,
    'textarea' => '<textarea name="{{name}}"{{attrs}}>{{value}}</textarea>',
    // Container for submit buttons.
    'submitContainer' => '<div class="submit">{{content}}</div>',
];
?>


<div class="container-fluid   container-fixed-lg">
    <div class="row">
        <div class="col-lg-12">
            <!-- START card -->
            <div class="card card-default">
                <div class="card-header ">
                    <div class="card-title">
                        <?= __('About') ?>
                    </div>
                </div>
                <div class="card-block">
                    <h5>
                        <?= __('Add') ?>
                    </h5>
                    <?= $this->Form->create($about, ['templates' => $templatesPages]) ?>
                    <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('text');
                    ?>
                    <div class="col-md-12">    
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-complete btn-cons', 'id' => 'submit']) ?>
                    </div>
                    <?= $this->Form->end() ?>        </div>
            </div>
            <!-- END card -->
        </div>
    </div>
</div>
<script>
    const textarea = document.querySelector('#text');

    ClassicEditor
            .create(textarea)
            .then(editor => {
                window.editor = editor
            });

    document.getElementById('submit').onclick = () => {
        textarea.value = editor.getData();
    }
</script>