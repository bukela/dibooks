<template>
<div class="container">
  <div class="search-box column is-half">
    <div class="searchblock panel-block">
            <p class="searchlist control has-icons-left is-pulled-right">
                <input class="input is-small is-primary" v-model="query" v-on:keyup="autoComplete" type="search" placeholder="Pretraga">
                <span class="icon is-small is-left">
                <i class="fa fa-search"></i>
                </span>
            </p>
      </div>
  </div>
   
      <div class="columns is-centered">
            <div class="column is-four-fifths">
                    <table class="table is-fullwidth is-bordered is-striped">
                        <thead>
                            <tr>
                                <th>Naziv</th>
                                <th>Adresa</th>
                                <th>Mesto</th>
                                <th>Tekuci Racun</th>
                                <th>Email</th>
                                <th>Pregled</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr v-for="result in results" :key="result.id">
                                <td class="table-client">{{ result.naziv }}</td>
                                <td class="table-number">{{ result.adresa }}</td>
                                <td class="table-text">{{ result.mesto }}</td>
                                <td class="table-text">{{ result.tekuci_racun }}</td>
                                <td class="table-text">{{ result.email }}</td>
                        <td class="table-text has-text-centered"><a :href="'/klijent/' + result.id"><i class="fa fa-eye edit-ico"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="columns">
                        <div class="column is-2 is-offset-5">
                            <!-- {{ $workbooks->links() }} -->
                        </div>
                    </div>
            </div>
    </div>
</div>

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
      if (this.query.length > 0) {
        axios
          .get("/searchclients", { params: { query: this.query } })
          .then(response => {
            this.results = response.data;
          });
      } else {
        this.results = this.temp;
      }
    },
    getall() {
      axios
        .get("/getclients")
        .then(response => {
          this.results = this.temp = response.data;
        })
        .catch(error => (this.errors = error.response.data.errors));
    }
  }
};
</script>