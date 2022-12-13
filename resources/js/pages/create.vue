<template>
    <div>
        <h1>Create A Transaction</h1>
        <form @submit.prevent="addTransaction">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Transaction Name:</label>
                        <input type="text" class="form-control" v-model="transaction.name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Transaction Pice:</label>
                        <input type="number" class="form-control" v-model="transaction.price">
                    </div>
                </div>
            </div><br />
            <div class="form-group">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            transaction: {}
        }
    },
    methods: {
        addTransaction() {
            let uri = 'http://127.0.0.1:8000/api/transaction/store';
            this.axios.post(uri, this.transaction).then((response) => {
                this.$router.push({ name: 'transactions' });
            });
        }
    }
}
</script>
