<template>
    <div>
        <h1>Transactions</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'create' }" class="btn btn-primary">Create Transaction</router-link>
            </div>
        </div><br />

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="transaction in transactions" :key="transaction.id">
                    <td>{{ transaction.id }}</td>
                    <td>{{ transaction.name }}</td>
                    <td>{{ transaction.price }}</td>
                    <td><router-link :to="{ name: 'edit', params: { id: transaction.id } }"
                            class="btn btn-primary">Edit</router-link></td>
                    <td><button class="btn btn-danger" @click.prevent="deleteTransaction(transaction.id)">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            transactions: []
        }
    },
    created() {
        let uri = 'http://127.0.0.1:8000/api/transactions';
        this.axios.get(uri).then(response => {
            console.log(response);
            this.transactions = response.data;
        });
    },
    methods: {
      deleteTransaction(id)
      {
        let uri = `http://127.0.0.1:8000/api/transaction/delete/${id}`;
        this.axios.delete(uri).then(response => {
          this.transactions.splice(this.transactions.indexOf(id), 1);
        });
      }
    }
}
</script>
