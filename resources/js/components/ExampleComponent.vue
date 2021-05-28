<template>
    <div>
        <bootstrap-4-datatable :actions="actions" :columns="columns" :data="rows" :filter="filter" :per-page="perPage"></bootstrap-4-datatable>
    </div>
</template>

<script>
    var btnwarning;
    var btndanger;
    var users = [];
    var btns;
    var btns2;
$(document).ready(function(){
    setTimeout(() => {
        $('tbody tr td:last-child').append(btnwarning);
        $('tbody tr td:last-child').append(btndanger);
        btns = document.getElementsByClassName("btn-warning");
        btns2 = document.getElementsByClassName("btn-danger");
        for(let i=0 ; i < users.length; i ++){
            btns[i].setAttribute('href', '/users/'+ users[i] + '/edit');
            btns2[i].setAttribute('href', '/api/user/'+ users[i] + '/delete');
        }
    }, 1000);
})
    export default {
        data() {
            return {
                columns: [{
                        label: 'ID',
                        field: 'id',
                        align: 'center',
                    },
                    {
                        label: 'Nombre',
                        field: 'name',
                        align: 'center',
                    },
                    {
                        label: 'Email',
                        field: 'email',
                        align: 'center',
                    },
                    {
                        label: 'Rol',
                        field: 'role_id',
                        align: 'center',
                        sortable: false,
                    },
                    {
                        label: 'Acciones',
                        align: 'center',
                        sortable: false,
                    }
                ],
                rows: [],
                page: 0,
                filter:  '',
                perPage: 12,
            }
        },
        methods: {
            showUsers: function () {
                axios.get('/api/user').then(function (res) {
                    for (let i = 0; i < res.data.users.length; i++) {
                        
                        users.push(res.data.users[i].id);

                        for (let j = 0; j < res.data.rols.length; j++) {  
                            if (res.data.rols[j].id == res.data.users[i].role_id) {
                                res.data.users[i].role_id = res.data.rols[j].desc;
                            }  
                            this.rows = res.data.users;
                        }
                    }
                }.bind(this));
            },
            addButtons: function(){
                btnwarning = document.createElement('a');
                btndanger = document.createElement('a');
                $(btndanger).addClass('btn btn-danger').text('Eliminar');
                $(btnwarning).addClass('btn btn-warning').text('Editar');
                return btnwarning;
            }
        },
        created: function () {
            this.showUsers() 
            this.addButtons()    
        },
        mounted:function(){

            this.addButtons() 
            var x = document.getElementById("tabla").rows;

        }
  }
</script>