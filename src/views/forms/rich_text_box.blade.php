 <div class="column is-full">
<div class="field">
          <label for="{{ $name }}">{{ title_case($name) }}</label>
            <textarea class="richTextBox @if($errors->has($name)) is-danger @endif" name="{{ $name }}">
            @if(empty($value)){{ old($name)}}@else{{ $value }}@endif
            </textarea>
             <p class="help is-danger">{{ $errors->first($name) }}</p>
</div>
 </div>
