<template>
    <section class="shop-list section-padding">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
				   <div class="shop-filters">
					  <div id="accordion">
						 <div class="card">
							<div class="card-header" id="headingOne">
							   <h5 class="mb-0">
								  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Kategori <span class="mdi mdi-chevron-down float-right"></span>
								  </button>
							   </h5>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							   <div class="card-body card-shop-filters">
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb1">
									 <label class="custom-control-label" for="cb1">Semua Produk </label>
								  </div>
							   </div>
							</div>
						 </div>
						 <!-- <div class="card">
							<div class="card-header" id="headingTwo">
							   <h5 class="mb-0">
								  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Price <span class="mdi mdi-chevron-down float-right"></span>
								  </button>
							   </h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							   <div class="card-body card-shop-filters">
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="1">
									 <label class="custom-control-label" for="1">$68 to $659 <span class="badge badge-warning">50% OFF</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="2">
									 <label class="custom-control-label" for="2">$660 to $1014</label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="3">
									 <label class="custom-control-label" for="3">$1015 to $1679</label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="4">
									 <label class="custom-control-label" for="4">$1680 to $1856</label>
								  </div>
							   </div>
							</div>
						 </div> -->
					  </div>
				   </div>
				   <div class="left-ad mt-4">
					  <img class="img-fluid" src="https://via.placeholder.com/254x557" alt="">
				   </div>
				</div>
               <div class="col-md-9">
                  <div class="shop-head">
                     <a href="#"><span class="mdi mdi-home"></span> Beranda</a> <span class="mdi mdi-chevron-right"></span> <a href="#">Produk</a>
                     <div class="btn-group float-right mt-2">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Urutkan Produk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="#" v-on:click="sort('')">Sesuai</a>
                           <a class="dropdown-item" href="#" v-on:click="sort('harga','asc')">Harga (Rendah ke Tinggi)</a>
                           <a class="dropdown-item" href="#" v-on:click="sort('harga','desc')">Harga (Tinggi ke Rendah)</a>
                           <a class="dropdown-item" href="#" v-on:click="sort('nama','asc')">Nama</a>
                        </div>
                     </div>
                     <h5 class="mb-3">Produk</h5>
                  </div>
                  <div class="row no-gutters">
                     <div class="col-md-4" v-for="(item,index) in items" :key="index" :index="index">
                        <div class="product">
                           <a :href="base_url + '/bahan-masakan/' + item.slug">
                              <div class="product-header">
                                 <img class="img-fluid" :src="base_path + 'storage/' + item.foto" :alt="item.nama">
                              </div>
                              <div class="product-body">
                                 <h5>{{ item.nama }}</h5>
                                 <h6><strong><span class="mdi mdi-approval"></span> Tersedia</strong> - {{ item.stok }} {{ item.satuan }}</h6>
                              </div>
                              <div class="product-footer pb-3">
                                 <button type="button" class="btn btn-secondary btn-sm float-right"><i class="mdi mdi-cart-outline"></i> Masukkan Keranjang</button>
                                 <p class="offer-price mb-0">Rp {{ item.harga }}</p>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <nav v-show="pagination.count > 0">
                     <ul class="pagination justify-content-center mt-4">
                        <li class="page-item" :class="pagination.page != 1 ? '' : 'disabled'" v-on:click="paginate('previous')">
                           <a class="page-link" href="#">Sebelumnya</a>
                        </li>
                        <template v-for="(list,ind) in pageList">
                            <li class="page-item" :class="list == pagination.page ? 'active' : ''">
                                <a class="page-link" v-on:click="paginate(list)" href="#" v-if="list != pagination.page">{{list}}</a>
                                <template v-else>
                                    <span class="page-link">
                                    {{list}}
                                    <span class="sr-only">(current)</span>
                                    </span>
                                </template>
                            </li>
                        </template>
                        <li class="page-item" :class="pagination.page != pagination.count ? '' : 'disabled'" v-on:click="paginate('previous')">
                           <a class="page-link" href="#">Selanjutnya</a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </section>
</template>

<script>
    export default {
        props: ['oid', 'url', 'params','config'],
        data() {
          return {
            base_path: base_path,
            base_url: base_url,
            isLoading: true,
            items: [],
            info: {},
            pagination: {
                page: 1,
                previous: false,
                next: false,
                perpage: 9,
                count: 0,
            },
            sortColumn: null,
            sortDir: null,
            detail: {},
            showDetail: false,
            pageList: []
          }
        },
        methods: {
            paginate(direction) {
                if (direction === 'previous') {
                    if (this.pagination.page > 1) {
                        --this.pagination.page;
                        this.changePage();
                    }
                } else if (direction === 'next') {
                    if (Math.floor((this.pagination.count - 1) / this.pagination.perpage) != (this.pagination.page - 1)) {
                        ++this.pagination.page;
                        this.changePage();
                    }
                } else if (direction === 'first') {
                    this.pagination.page = 1;
                    this.changePage();
                } else if (direction === 'last') {
                    this.pagination.page = Math.floor((this.pagination.count - 1) / this.pagination.perpage) + 1;
                    this.changePage();
                }
            },
            changePage(page) {
                if (isNaN(parseInt(this.pagination.page)) || this.pagination.page < 1) {
                    this.pagination.page = 1;
                }
                this.getData(this.pagination.page);
            },
            clearFilter() {
                for (var key in this.params) {
                    if (this.params.hasOwnProperty(key)) {
                        this.params[key] = '';
                    }
                }
                this.sortColumn      = null;
                this.sortDir         = null;
                this.pagination.page = 1;
                this.changePage();
            },
            sort(col, default_sort_dir) {
                if (this.sortColumn == col) {
                    this.sortDir = default_sort_dir ? default_sort_dir : ((this.sortDir == 'asc') ? 'desc' : 'asc');
                } else {
                    this.sortColumn = col;
                    this.sortDir    = default_sort_dir ? default_sort_dir : 'asc';
                }
                if (this.config.local_sort) {

                } else {
                    this.pagination.page = 1;
                    this.changePage();
                }
            },
            getData(page) {
                var that       = this;
                that.isLoading = true;
                $.getJSON(that.url,
                    {
                        page: page,
                        perpage: that.config.show_all ? 99999 : that.pagination.perpage,
                        params: that.params,
                        order: that.sortColumn,
                        order_direction: that.sortDir,
                    },
                    function (data) {
                        that.items            = data.data;
                        that.info             = data.info;
                        that.isLoading        = false;
                        that.pagination.count = data.count;
                        var totalPage = Math.floor((that.pagination.count - 1) / that.pagination.perpage) + 1;
                        that.pageList = Array.from({length: totalPage}, (v, i) => i+1);
                        if (that.pagination.count > 0 && that.pagination.page > Math.floor((that.pagination.count - 1) / that.pagination.perpage) + 1) {
                            that.pagination.page = Math.floor((that.pagination.count - 1) / that.pagination.perpage) + 1;
                            that.changePage();
                        }
                    });
            },
        },
        computed: {
            showCustomEmptyPage: function () {
                return this.config.custom_empty_page == true && this.pagination.count == 0 && !this.isLoading;
            },
            totalColumns: function () {
                return (this.config.has_number ? 1 : 0) + _.size(this.columns) + (this.config.has_action ? 1 : 0);
            },
        },
        events: {
            'clear-filter'(objid) {
                if (objid == this.oid) {
                    this.clearFilter();
                }
            },
            'reset-search'(objid) {
                if (objid == this.oid) {
                    this.sortColumn      = null;
                    this.sortDir         = null;
                    this.pagination.page = 1;
                    this.doSearch();
                }
            },
        },
        mounted() {
            var that = this;
            this.$nextTick(function () {
                if (that.config.default_sort) {
                    if (that.config.autoload) {
                        that.sort(that.config.default_sort, that.config.default_sort_dir)
                    } else {
                        that.sortColumn = that.config.default_sort;
                        that.sortDir    = that.config.default_sort_dir ? that.config.default_sort_dir : 'asc';
                    }
                } else if (that.config.autoload) {
                    that.changePage(1)
                }
            });
        }
    }
</script>
