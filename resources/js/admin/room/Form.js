import AppForm from '../app-components/Form/AppForm';

Vue.component('room-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                floor:  false ,
                room_number:  false ,
                description:  '' ,
                out_of_order:  false ,
                
            }
        }
    }

});