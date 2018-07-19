<template>
<div class="container">
  <div class="search-box column is-half">
    <div class="searchblock panel-block">
            <p class="searchlist control has-icons-left is-pulled-right">
                <input class="input is-small is-primary" v-model="autoComplete" type="search" placeholder="Pretraga">
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
                        <tr v-for="item in temp" :key="item.id">
                                <td class="table-client">{{ item.client.naziv }}</td>
                                <td class="table-number">{{ item.broj_fakture }}</td>
                                <td class="table-text">{{ item.redni_broj }}</td>
                                <td class="table-text">{{ item.datum_prijema }}</td>
                                <td class="table-text">{{ item.datum_fakture }}</td>
                                <td class="table-text">{{ item.iznos }}</td>
                                <td class="table-text">{{ item.valuta }}</td>
                        <td class="table-text has-text-centered"><a :href="'/ulazna-faktura/' + item.id"><i class="fa fa-eye edit-ico"></i></a></td>
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
      temp: [],
      autoComplete: ''
    };
  },
  mounted() {
    this.getall();
  },
    watch:{
			autoComplete(){
				if (this.autoComplete.length > 0) {
					this.temp = this.results.filter((item) => {
						return Object.keys(item).some((key)=>{
							let string = String(item[key]) 
							return string.toLowerCase().indexOf(this.autoComplete.toLowerCase())>-1
            })
          });
				} else {
					this.temp = this.results
				}
			}
		},
  methods: {
    // autoComplete() {
    //   this.results = [];
    //   if (this.query.length > 0) {
    //     axios
    //       .get("/searchincoming", { params: { query: this.query } })
    //       .then(response => {
    //         this.results = response.data;
    //       });
    //   } else {
    //     this.results = this.temp;
    //   }

    getall() {
      axios
        .get("/getincoming")
        .then(response => {
          this.results = this.temp = response.data;
        })
        .catch(error => (this.errors = error.response.data.errors));
      }
    },
    
  }

</script>