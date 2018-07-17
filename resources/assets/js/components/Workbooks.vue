<template>
<tbody>
<tr v-for="result in results" :key="result.id">
        <td class="table-client">{{ result.id }}</td>
        <td class="table-number">{{ result.name }}</td>
        <td class="table-text">{{ result.email }}</td>
        <!-- <td class="table-text">{{ $client->tekuci_racun }}</td> -->
        <!-- <td class="table-text">{{ $client->email }}</td> -->
<td class="table-text has-text-centered"><a href="#"><i class="fa fa-eye edit-ico"></i></a></td>
</tr>

</tbody>



</template>
<script>
export default {
  data() {
    return {
      query: "",
      results: [],
      temp: []
    };
  },
  mounted() {
    this.getall();
  },
  methods: {
    autoComplete() {
      this.results = [];
      if (this.query.length > 1) {
        axios
          .get("/searchworkbooks", { params: { query: this.query } })
          .then(response => {
            this.results = response.data;
          });
      } else {
        this.results = this.temp;
      }
    },
    getall() {
      axios
        .get("/getworkbooks")
        .then(response => {
          this.results = this.temp = response.data;
        })
        .catch(error => (this.errors = error.response.data.errors));
    }
  }
};
</script>