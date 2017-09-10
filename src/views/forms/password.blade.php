 <div class="column is-half">
 <div class="field">
            <label for="{{ $name }}">{{ title_case($name) }}</label>
            <p class="control">
                <input type="password" id="{{ $name }}" class="input @if($errors->has($name)) is-danger @endif" placeholder="{{ title_case($name) }}" name="{{ $name }}">
            </p>
             <p class="help is-danger">{{ $errors->first($name) }}</p>
</div>
 <div class="field">
            <label for="{{ $name }}">{{ title_case($name) }} Confirmation</label>
            <p class="control">
                <input type="password" id="{{ $name }}" class="input @if($errors->has($name)) is-danger @endif" placeholder="{{ title_case($name) }}" name="{{ $name.'_confirmation' }}">
            </p>
             <p class="help is-danger">{{ $errors->first($name) }}</p>
</div>
</div>
