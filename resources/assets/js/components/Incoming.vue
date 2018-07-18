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
                            <th>Klijent</th>
                            <th>Broj Fakture</th>
                            <th>Redni Broj</th>
                            <th>Datum Prijema</th>
                            <th>Datum Fakture</th>
                            <th>Iznos</th>
                            <th>Valuta</th>
                            <th>Pregled</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr v-for="result in results" :key="result.id">
                                <td class="table-client">{{ result.client.naziv }}</td>
                                <td class="table-number">{{ result.broj_fakture }}</td>
                                <td class="table-text">{{ result.redni_broj }}</td>
                                <td class="table-text">{{ result.datum_prijema }}</td>
                                <td class="table-text">{{ result.datum_fakture }}</td>
                                <td class="table-text">{{ result.iznos }}</td>
                                <td class="table-text">{{ result.valuta }}</td>
                        <td class="table-text has-text-centered"><a :href="'/ulazna-faktura/' + result.id"><i class="fa fa-eye edit-ico"></i></a></td>
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
          .get("/searchincoming", { params: { query: this.query } })
          .then(response => {
            this.results = response.data;
          });
      } else {
        this.results = this.temp;
      }
    },
    getall() {
      axios
        .get("/getincoming")
        .then(response => {
          this.results = this.temp = response.data;
        })
        .catch(error => (this.errors = error.response.data.errors));
    }
  }
};
</script>