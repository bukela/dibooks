<template>
<div class="container">
  <div class="search-box column is-half">
    <div class="searchblock panel-block">
            <p class="searchlist control has-icons-left is-pulled-right">
                <input class="input is-small is-primary" v-model="autoComplete"  type="search" placeholder="Pretraga">
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
                            <th>Broj</th>
                            <th>Osnovni Broj</th>
                            <th>Predmet</th>
                            <th>Posiljalac</th>
                            <th>Pregled</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr v-for="item in temp">
                                <td class="table-text">{{ item.broj }}</td>
                                <td class="table-client">{{ item.osnovni_broj }}</td>
                                <td class="table-number">{{ item.predmet }}</td>
                                <td class="table-text">{{ item.posiljalac }}</td>
                        <td class="table-text has-text-centered"><a :href="'/delovodnik/' + item.id"><i class="fa fa-eye edit-ico"></i></a></td>
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
              // console.log(string) 
							return string.toLowerCase().indexOf(this.autoComplete.toLowerCase())>-1
            })
            // return item.workbook_item.posiljalac.toLowerCase().indexOf(this.autoComplete.toLowerCase()) > -1
            
          });
				} else {
					this.temp = this.results
				}
			}
		},
  methods: {
    // autoComplete() {
    //   this.results = [];
    //   if (this.query.length > 1) {
    //     axios
    //       .get("/searchworkbooks", { params: { query: this.query } })
    //       .then(response => {
    //         this.results = response.data;
    //       });
    //   } else {
    //     this.results = this.temp;
    //   }
    // },
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