<tempale>
    <div>
        <div class="alert alert-primary text-center" v-if="processing">
            <i class="fa fa-compass"></i> Procesando petición...
        </div>
        <v-server-table ref="table" :columns="columns" :url="url" :options="options">
    </div>
</tempale>


<script>
    import {Event} from 'vue-tables-2';
    export default {
        name: "turns",
        props: {
            labels: {
                type: Object,
                required: true
            },
            route: {
                type: String,
                required: true
            }
        },
        data () {
            return{
                processing: false,
                date: '2018-04-09',
                url: this.route,
                columns: ['id','date','hour'],
                options:{
                    filterByColumn: true,
                    perPages: 10,
                    perPageValues: [10,25,50,100],
                    headings: {
                        id: 'ID',
                        date: this.labels.date,
                        hour: this.labels.hour,
                    },
                    customFilters: ['date'],
                    sortable: ['id', 'date', 'hour'],
                    filterable: ['name'],
                    requestFunction: function (data) {
                        return window.axios.get(this.url, {
                            params: data
                        })
                            .catch(function (e) {
                                this.dispatch('error', e);
                            }.bind(this));
                    }
                }
            }
        },
    }


</script>

<style>
    .table-bordered>thead>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>tfoot>tr>td {
        text-align: center !important;
    }
</style>