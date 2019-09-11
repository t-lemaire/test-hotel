<div class="form-group row align-items-center" :class="{'has-danger': errors.has('floor'), 'has-success': this.fields.floor && this.fields.floor.valid }">
    <label for="floor" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.room.columns.floor') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.floor" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('floor'), 'form-control-success': this.fields.floor && this.fields.floor.valid}" id="floor" name="floor" placeholder="{{ trans('admin.room.columns.floor') }}">
        <div v-if="errors.has('floor')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('floor') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('room_number'), 'has-success': this.fields.room_number && this.fields.room_number.valid }">
    <label for="room_number" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.room.columns.room_number') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.room_number" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('room_number'), 'form-control-success': this.fields.room_number && this.fields.room_number.valid}" id="room_number" name="room_number" placeholder="{{ trans('admin.room.columns.room_number') }}">
        <div v-if="errors.has('room_number')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('room_number') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': this.fields.description && this.fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.room.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.description" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('description'), 'form-control-success': this.fields.description && this.fields.description.valid}" id="description" name="description" placeholder="{{ trans('admin.room.columns.description') }}">
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('out_of_order'), 'has-success': this.fields.out_of_order && this.fields.out_of_order.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="out_of_order" type="checkbox" v-model="form.out_of_order" v-validate="''" data-vv-name="out_of_order"  name="out_of_order_fake_element">
        <label class="form-check-label" for="out_of_order">
            {{ trans('admin.room.columns.out_of_order') }}
        </label>
        <input type="hidden" name="out_of_order" :value="form.out_of_order">
        <div v-if="errors.has('out_of_order')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('out_of_order') }}</div>
    </div>
</div>


