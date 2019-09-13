import AppForm from '../app-components/Form/AppForm';

Vue.component('reservation-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                user_id:  '' ,
                room_id:  '' ,
                from_date:  '' ,
                to_date:  '' ,
                
            }
        }
    }

});