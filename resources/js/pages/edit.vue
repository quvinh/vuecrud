<template>
  <div>
    <h1>Edit Transaction</h1>
    <form @submit.prevent="updateTransaction">
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
              <label>Transaction Price:</label>
              <input type="text" class="form-control" v-model="transaction.price">
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary">Update</button>
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
      created() {
        let uri = `http://127.0.0.1:8000/api/transaction/edit/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.transaction = response.data;
        });
      },
      methods: {
        updateTransaction() {
          let uri = `http://127.0.0.1:8000/api/transaction/update/${this.$route.params.id}`;
          this.axios.put(uri, this.transaction).then((response) => {
            this.$router.push({name: 'transactions'});
          });
        }
      }
    }
</script>
