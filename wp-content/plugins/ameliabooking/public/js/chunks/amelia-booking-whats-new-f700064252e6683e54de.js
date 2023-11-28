wpJsonpAmeliaBookingPlugin([0],{1372:function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s=a(666),o=a.n(s);t.default={data:function(){return{email:"",isValidEmail:!0,blogPosts:[],features:[{icon:"am-email-blue",name:this.$root.labels.email_notifications,url:"notifications/"},{icon:"am-card-blue",name:this.$root.labels.online_payments,url:"configuring-payments/"},{icon:"am-calendar-blue",name:this.$root.labels.events,url:"working-with-events/"},{icon:"am-package-blue",name:this.$root.labels.packages_services,url:"packages/"},{icon:"am-recurr-blue",name:this.$root.labels.recurring_appointments,url:"recurring-appointments/"},{icon:"am-gcalendar",name:this.$root.labels.google_sync,url:"configuring-google-calendar/"},{icon:"am-woocommerce",name:this.$root.labels.wc,url:"woocommerce-integration/"},{icon:"am-zoom-blue",name:this.$root.labels.zoom_meet,url:"configuring-zoom/"},{icon:"am-text-blue",name:this.$root.labels.custom_fields,url:"custom-fields/"},{icon:"am-sandclock-blue",name:this.$root.labels.custom_service_duration,url:"custom-service-duration/"}],loading:!1}},methods:{clearValidation:function(){this.isValidEmail=!0},submitForm:function(){/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(this.email)?(this.isValidEmail=!0,this.$refs.emailForm.submit()):this.isValidEmail=!1},getNews:function(){var e=this;this.loading=!0,this.$http.get(this.$root.getAjaxUrl+"/whats-new").then(function(t){e.blogPosts=t.data.data.blogPosts.slice(0,6),e.loading=!1}).catch(function(t){e.loading=!1,console.log(t)})}},created:function(){this.getNews()},components:{PageHeader:o.a}}},1373:function(e,t){e.exports={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"am-wrap",attrs:{id:"am-whats-new"}},[a("div",{staticClass:"am-body"},[a("page-header"),e._v(" "),a("div",{staticClass:"am-whats-new-welcome am-section am-whats-new-section"},[a("div",{staticClass:"am-whats-new-welcome-left"},[a("div",{staticClass:"am-whats-new-welcome-title"},[e._v(e._s(e.$root.labels.welcome_to_amelia))]),e._v(" "),a("div",{staticClass:"am-whats-new-welcome-subtitle"},[e._v(e._s(e.$root.labels.welcome_congratz))]),e._v(" "),a("a",{staticClass:"am-whats-new-btn",attrs:{href:"https://www.youtube.com/c/AmeliaWordPressBookingPlugin",target:"_blank"}},[e._v("\n          "+e._s(e.$root.labels.discover_amelia)+"\n        ")])]),e._v(" "),a("div",{staticClass:"am-whats-new-welcome-right"},[a("img",{attrs:{src:e.$root.getUrl+"public/img/am-whats-new-welcome.webp"}})])]),e._v(" "),a("div",{staticClass:"am-whats-new-blog am-section am-whats-new-section"},[a("div",{staticClass:"am-whats-new-blog-left"},[a("div",{staticClass:"am-whats-new-blog-title am-whats-new-blog-title-text"},[e._v("\n          "+e._s(e.$root.labels.news_blog)),a("img",{attrs:{src:e.$root.getUrl+"public/img/am-ringing-bel.png"}})]),e._v(" "),e.loading?a("div",{staticClass:"am-whats-new-loader"},[a("img",{attrs:{src:e.$root.getUrl+"public/img/spinner.svg"}})]):a("div",{staticClass:"am-whats-new-blog-list"},e._l(e.blogPosts,function(t){return a("div",{key:t.href,staticClass:"am-whats-new-blog-list-item"},[a("p",[e._v(e._s(t.title))]),e._v(" "),a("a",{attrs:{href:t.href,target:"_blank"}},[a("img",{attrs:{src:e.$root.getUrl+"public/img/am-arrow-upper-right.svg"}})])])}),0),e._v(" "),a("div",{staticClass:"am-whats-new-blog-subscribe"},[a("div",{staticClass:"am-whats-new-blog-subscribe-left"},[a("div",{staticClass:"am-whats-new-blog-subscribe-title"},[e._v(e._s(e.$root.labels.keep_up_to_date))]),e._v(" "),a("div",{staticClass:"am-whats-new-blog-subscribe-subtitle am-whats-new-blog-subtitle-text"},[e._v(e._s(e.$root.labels.never_miss_notifications))]),e._v(" "),a("div",{staticClass:"am-whats-new-blog-subscribe-form"},[a("form",{ref:"emailForm",staticClass:"am-whats-new-blog-subscribe-form",attrs:{action:"https://acumbamail.com/newform/subscribe/ET8rshmNeLvQox6J8U99sSJZ8B1DZo1mhOgs408R0mHYiwgmM/31412/",method:"post"},on:{submit:function(t){return t.preventDefault(),e.submitForm(t)}}},[a("div",{},[a("div",{staticStyle:{width:"100%",position:"relative"}},[e.isValidEmail?e._e():a("span",{staticStyle:{color:"red"},attrs:{id:"am-subscribe-error-msg"}},[e._v("Please enter a valid email address.")]),a("br"),e._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:e.email,expression:"email"}],attrs:{id:"r0c0m2i1",name:"email_1",type:"email",placeholder:e.$root.labels.enter_your_email,required:""},domProps:{value:e.email},on:{keyup:e.clearValidation,input:function(t){t.target.composing||(e.email=t.target.value)}}}),a("br"),e._v(" "),a("input",{staticStyle:{position:"absolute",left:"-4900px"},attrs:{type:"text",name:"a642138c",tabindex:"-1",value:"","aria-hidden":"true",id:"a642138c",autocomplete:"off"}}),e._v(" "),a("br"),e._v(" "),a("input",{staticStyle:{position:"absolute",left:"-5000px"},attrs:{type:"email",name:"b642138c",tabindex:"-1",value:"","aria-hidden":"true",id:"b642138c",autocomplete:"off"}}),e._v(" "),a("br"),e._v(" "),a("input",{staticStyle:{position:"absolute",left:"-5100px"},attrs:{type:"checkbox",name:"c642138c",tabindex:"-1","aria-hidden":"true",id:"c642138c",autocomplete:"off"}}),e._v(" "),a("br")])]),e._v(" "),a("input",{attrs:{type:"hidden",name:"ok_redirect",id:"id_redirect",value:"/*You can insert the url that you want to redirect to after a valid registration here */"}}),e._v(" "),a("input",{staticClass:"am-whats-new-btn am-subscribe-btn",attrs:{type:"submit"},domProps:{value:e.$root.labels.subscribe}})])])]),e._v(" "),a("div",{staticClass:"am-whats-new-blog-subscribe-right"},[a("img",{attrs:{src:e.$root.getUrl+"public/img/am-subscribe-box.svg"}})])])]),e._v(" "),a("div",{staticClass:"am-whats-new-blog-right"},[a("div",{staticClass:"am-whats-new-blog-support am-whats-new-blog-box"},[a("img",{attrs:{src:e.$root.getUrl+"public/img/am-contact-support.svg"}}),e._v(" "),a("div",{staticClass:"am-whats-new-blog-title-text"},[e._v("\n            "+e._s(e.$root.labels.have_questions)+"\n          ")]),e._v(" "),a("div",{staticClass:"am-whats-new-blog-support-subtitle am-whats-new-blog-subtitle-text"},[e._v("\n            "+e._s(e.$root.labels.our_support_team)+"\n          ")]),e._v(" "),a("a",{staticClass:"am-whats-new-btn",attrs:{href:"https://tmsplugins.ticksy.com/submit/#100012870",target:"_blank"}},[e._v("\n            "+e._s(e.$root.labels.contact_our_support)+"\n          ")])])])]),e._v(" "),a("div",{staticClass:"am-whats-new-features am-section am-whats-new-section"},[a("div",{staticClass:"am-whats-new-features-left"},[a("div",{staticClass:"am-whats-new-features-header"},[a("div",{staticClass:"am-whats-new-features-title am-whats-new-blog-title-text"},[e._v("\n            "+e._s(e.$root.labels.amelia_features)+"\n          ")])]),e._v(" "),a("div",{staticClass:"am-whats-new-features-list"},e._l(e.features,function(t){return a("a",{key:t.icon,staticClass:"am-whats-new-features-item",attrs:{href:"https://wpamelia.com/"+t.url,target:"_blank"}},[a("img",{attrs:{alt:t.name,src:e.$root.getUrl+"public/img/"+t.icon+".svg"}}),e._v(" "),a("span",[e._v("\n                "+e._s(t.name)+"\n              ")])])}),0)]),e._v(" "),a("div",{staticClass:"am-whats-new-features-right"},[a("div",{staticClass:"am-whats-new-blog-success-stories am-whats-new-blog-box"},[a("img",{attrs:{src:e.$root.getUrl+"public/img/am-success-stories.webp"}}),e._v(" "),a("div",{staticClass:"am-whats-new-blog-success-stories-title am-whats-new-blog-title-text"},[e._v("\n            "+e._s(e.$root.labels.take_a_look)+"\n          ")]),e._v(" "),a("a",{staticClass:"am-whats-new-btn",attrs:{href:"https://wpamelia.com/success-stories/",target:"_blank"}},[e._v("\n            "+e._s(e.$root.labels.read_success_stories)+"\n          ")])])])])],1)])},staticRenderFns:[]}},1374:function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s=a(666),o=a.n(s);t.default={data:function(){return{blogPosts:[],changelog:{version:"6.5",changes:[]},features:[{feature:"Domain",lite:"1",basic:"1",pro:"up to 3",developer:"up to 1000"},{feature:"Support",lite:"Limited",basic:"Premium",pro:"Premium",developer:"Premium"},{feature:"Unlimited Appointments and Events",lite:!0,basic:!0,pro:!0,developer:!0},{feature:"Customizable Design",lite:!0,basic:!0,pro:!0,developer:!0},{feature:"Automated Notification Management (SMS and Email)",lite:"Limited",basic:!0,pro:!0,developer:!0},{feature:"No-code Website Builder and Embeddable Booking Form",lite:!0,basic:!0,pro:!0,developer:!0},{feature:"Import Customers' data",lite:!0,basic:!0,pro:!0,developer:!0},{feature:"Multiple Booking Forms",lite:!0,basic:!0,pro:!0,developer:!0},{feature:"Group Appointment Bookings",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Unlimited Employees",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Management of Multiple Locations",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Recurring Appointments and Events",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Employee and Customer Panel",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Deposit Payments",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Discount coupons",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Service Extras",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Custom Service Duration",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Multilingual Support",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"4 Payment Providers (Mollie, PayPal, Stripe, Razorpay)",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"WooCommerce Payments",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Marketing Tools and Analytics (Google Analytics, Facebook Pixel)",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Online Platforms (Zoom, GoogleMeet, LessonSpace)",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Calendar Synchronizations (Google Calendar, Outlook)",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"WebHooks (Zapier and MailChimp)",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"Payment links",lite:!1,basic:!0,pro:!0,developer:!0},{feature:"WhatsApp integration",lite:!1,basic:!1,pro:!0,developer:!0,tag:"New"},{feature:"Packages of Services",lite:!1,basic:!1,pro:!0,developer:!0},{feature:"Resources",lite:!1,basic:!1,pro:!0,developer:!0,tag:"New"},{feature:"Refund option",lite:!1,basic:!1,pro:!0,developer:!0,tag:"New"},{feature:"REST API",lite:!1,basic:!1,pro:!1,developer:!0,tag:"New"},{feature:"Cart",lite:!1,basic:!1,pro:!0,developer:!0,tag:"Soon"}]}},methods:{getNews:function(){},getIconType:function(e){var t=e.toLowerCase();switch(t){case"improvement":case"bugfix":case"feature":case"translations":return t;default:return"plus"}}},created:function(){this.getNews()},components:{PageHeader:o.a}}},1375:function(e,t){e.exports={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"am-wrap",attrs:{id:"am-lite-vs-premium"}},[a("div",{staticClass:"am-body"},[a("page-header"),e._v(" "),a("div",{staticClass:"am-lite-vs-premium-welcome am-section am-lite-vs-premium-section"},[a("div",{staticClass:"am-lite-vs-premium-welcome-left"},[a("div",{staticClass:"am-lite-vs-premium-welcome-title"},[e._v(e._s(e.$root.labels.amelia_plans_comparison))]),e._v(" "),a("div",{staticClass:"am-lite-vs-premium-welcome-subtitle"},[e._v(e._s(e.$root.labels.upgrade_to_premium))]),e._v(" "),a("a",{staticClass:"am-lite-vs-premium-btn",attrs:{href:"https://wpamelia.com/pricing/?utm_source=amelia-lite&utm_medium=lite-upgrade&utm_content=amelia&utm_campaign=amelia-lite",target:"_blank"}},[e._v("\n          "+e._s(e.$root.labels.upgrade_now)+"\n        ")])]),e._v(" "),a("div",{staticClass:"am-lite-vs-premium-welcome-right"},[a("img",{attrs:{src:e.$root.getUrl+"public/img/am-lite-vs-premium.webp"}})]),e._v(" "),a("div",{staticClass:"am-lite-vs-premium-welcome-border"})]),e._v(" "),a("div",{staticClass:"am-lite-vs-premium-table am-section am-lite-vs-premium-section"},[a("el-row",{staticClass:"am-lite-vs-premium-table-row-header"},[a("el-col",{staticClass:"el-table_1_column_1 cell",attrs:{span:12,sm:8}},[a("div",[e._v("Features")])]),e._v(" "),a("el-col",{staticClass:"el-table_1_column_2 cell",attrs:{span:3,sm:4}},[a("div",[e._v("Lite")])]),e._v(" "),a("el-col",{staticClass:"el-table_1_column_3 cell",attrs:{span:3,sm:4}},[a("div",[e._v("Basic")])]),e._v(" "),a("el-col",{staticClass:"el-table_1_column_4 cell",attrs:{span:3,sm:4}},[a("div",[e._v("Pro")])]),e._v(" "),a("el-col",{staticClass:"el-table_1_column_5 cell",attrs:{span:3,sm:4}},[a("div",[e._v("Developer")])])],1),e._v(" "),e._l(e.features,function(t){return a("el-row",{key:t.feature,staticClass:"am-lite-vs-premium-table-row"},[a("el-col",{staticClass:"am-lite-vs-premium-table-feature",attrs:{span:12,sm:8}},[a("div",{staticClass:"am-lite-vs-premium-table-feature-name"},[e._v(e._s(t.feature))]),e._v(" "),t.tag?a("el-tag",{attrs:{type:"Soon"===t.tag?"":"success","disable-transitions":""}},[e._v(e._s(t.tag)+"\n          ")]):e._e()],1),e._v(" "),a("el-col",{staticClass:"am-lite-vs-premium-table-col-lite",attrs:{span:3,sm:4}},[a("div",{class:"boolean"==typeof t.lite?t.lite?"am-blue-check":"am-minus":""},[e._v("\n              "+e._s("boolean"!=typeof t.lite?t.lite:"")+"\n              "),"Limited"==t.lite&&"Support"==t.feature?a("el-tooltip",{attrs:{placement:"top"}},[a("div",{attrs:{slot:"content"},domProps:{innerHTML:e._s(e.$root.labels.lite_support_tooltip)},slot:"content"}),e._v(" "),a("i",{staticClass:"el-icon-info am-tooltip-icon"})]):e._e()],1)]),e._v(" "),a("el-col",{staticClass:"am-lite-vs-premium-table-col-basic",attrs:{span:3,sm:4}},[a("div",{class:"boolean"==typeof t.basic?t.basic?"am-blue-check":"am-minus":""},[e._v("\n            "+e._s("boolean"!=typeof t.basic?t.basic:"")+"\n          ")])]),e._v(" "),a("el-col",{staticClass:"am-lite-vs-premium-table-col-pro",attrs:{span:3,sm:4}},[a("div",{class:"boolean"==typeof t.pro?t.pro?"am-blue-check":"am-minus":""},[e._v("\n            "+e._s("boolean"!=typeof t.pro?t.pro:"")+"\n          ")])]),e._v(" "),a("el-col",{staticClass:"am-lite-vs-premium-table-col-developer",attrs:{span:3,sm:4}},[a("div",{class:"boolean"==typeof t.developer?t.developer?"am-blue-check":"am-minus":""},[e._v("\n              "+e._s("boolean"!=typeof t.developer?t.developer:"")+"\n            ")])])],1)}),e._v(" "),a("div",{staticClass:"am-lite-vs-premium-table-btn-holder"},[a("a",{staticClass:"am-lite-vs-premium-btn",attrs:{href:"https://wpamelia.com/pricing/?utm_source=amelia-lite&utm_medium=lite-upgrade&utm_content=amelia&utm_campaign=amelia-lite",target:"_blank"}},[e._v("\n          "+e._s(e.$root.labels.upgrade_now)+"\n        ")])])],2)],1)])},staticRenderFns:[]}},1392:function(e,t,a){var s=a(332)(a(1372),a(1373),!1,null,null,null);e.exports=s.exports},1393:function(e,t,a){var s=a(332)(a(1374),a(1375),!1,null,null,null);e.exports=s.exports},666:function(e,t,a){var s=a(332)(a(670),a(671),!1,null,null,null);e.exports=s.exports},670:function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s=a(335);t.default={mixins:[s.a],props:["oldCustomize","appointmentsApproved","appointmentsPending","employeesTotal","customersTotal","locationsTotal","packagesTotal","resourcesTotal","servicesTotal","categoriesTotal","financeTotal","addNewCouponBtnDisplay","addNewCustomFieldBtnDisplay","locations","categories","bookableType","params","fetched"],methods:{showMainCustomize:function(){this.$emit("showMainCustomize",null)},showDialogCustomer:function(){this.$emit("newCustomerBtnClicked",null)},showDialogAppointment:function(){this.$emit("newAppointmentBtnClicked",null)},showDialogEvent:function(){this.$emit("newEventBtnClicked",null)},showDialogEmployee:function(){this.$emit("newEmployeeBtnClicked")},showDialogLocation:function(){this.$emit("newLocationBtnClicked")},showDialogService:function(){this.$emit("newServiceBtnClicked")},showDialogPackage:function(){this.$emit("newPackageBtnClicked")},showDialogPackageBooking:function(){this.$emit("newPackageBookingBtnClicked")},showDialogResource:function(){this.$emit("newResourceBtnClicked")},showDialogCoupon:function(){this.$emit("newCouponBtnClicked")},showDialogCustomFields:function(){this.$emit("newCustomFieldBtnClicked")},selectAllInCategory:function(e){this.$emit("selectAllInCategory",e)},changeFilter:function(){this.$emit("changeFilter")}}}},671:function(e,t){e.exports={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"am-page-header am-section"},[a("el-row",{attrs:{type:"wpamelia-calendar"===e.$router.currentRoute.name?"":"flex",align:"middle"}},[a("el-col",{attrs:{span:"wpamelia-calendar"===e.$router.currentRoute.name?6:18}},[a("div",{staticClass:"am-logo"},[a("img",{staticClass:"logo-big",attrs:{width:"92",src:e.$root.getUrl+"public/img/amelia-logo-horizontal.svg"}}),e._v(" "),a("img",{staticClass:"logo-small",attrs:{width:"28",src:e.$root.getUrl+"public/img/amelia-logo-symbol.svg"}})]),e._v(" "),a("h1",{staticClass:"am-page-title"},[e._v("\n        "+e._s(e.bookableType?e.$root.labels[e.bookableType]:e.$router.currentRoute.meta.title)+"\n\n        "),e._v(" "),e.appointmentsApproved>=0?a("span",{staticClass:"am-appointments-number approved"},[e._v("\n          "+e._s(e.appointmentsApproved)+"\n        ")]):e._e(),e._v(" "),e.appointmentsPending>=0?a("span",{staticClass:"am-appointments-number pending"},[e._v("\n          "+e._s(e.appointmentsPending)+"\n        ")]):e._e(),e._v(" "),e.employeesTotal>=0&&!0===e.$root.settings.capabilities.canReadOthers?a("span",[a("span",{staticClass:"total-number"},[e._v(e._s(e.employeesTotal))]),e._v(" "+e._s(e.$root.labels.total)+"\n        ")]):e._e(),e._v(" "),e.customersTotal>=0?a("span",[a("span",{staticClass:"total-number"},[e._v(e._s(e.customersTotal))]),e._v(" "+e._s(e.$root.labels.total)+"\n        ")]):e._e(),e._v(" "),e.locationsTotal>=0?a("span",[a("span",{staticClass:"total-number"},[e._v(e._s(e.locationsTotal))]),e._v(" "+e._s(e.$root.labels.total)+"\n        ")]):e._e(),e._v(" "),e.servicesTotal>=0&&"services"===e.bookableType?a("span",[a("span",{staticClass:"total-number"},[e._v(e._s(e.servicesTotal))]),e._v(" "+e._s(e.$root.labels.total)+"\n        ")]):e._e(),e._v(" "),e.packagesTotal>=0&&"packages"===e.bookableType?a("span",[a("span",{staticClass:"total-number"},[e._v(e._s(e.packagesTotal))]),e._v(" "+e._s(e.$root.labels.total)+"\n        ")]):e._e(),e._v(" "),e.resourcesTotal>=0&&"resources"===e.bookableType?a("span",[a("span",{staticClass:"total-number"},[e._v(e._s(e.resourcesTotal))]),e._v(" "+e._s(e.$root.labels.total)+"\n        ")]):e._e(),e._v(" "),e.financeTotal>=0?a("span",[a("span",{staticClass:"total-number"},[e._v(e._s(e.financeTotal))]),e._v(" "+e._s(e.$root.labels.total)+"\n        ")]):e._e()])]),e._v(" "),a("el-col",{staticClass:"align-right v-calendar-column",attrs:{span:"wpamelia-calendar"===e.$router.currentRoute.name?18:6}},["wpamelia-appointments"===e.$router.currentRoute.name&&(!0===e.$root.settings.capabilities.canWriteOthers||"provider"===this.$root.settings.role&&this.$root.settings.roles.allowWriteAppointments)?a("el-button",{staticClass:"am-dialog-create",attrs:{type:"primary"},on:{click:e.showDialogAppointment}},[a("i",{staticClass:"el-icon-plus"}),e._v(" "),a("span",{staticClass:"button-text"},[e._v(e._s(e.$root.labels.new_appointment))])]):e._e(),e._v(" "),"wpamelia-events"===e.$router.currentRoute.name&&(!0===e.$root.settings.capabilities.canWriteOthers||"provider"===this.$root.settings.role&&this.$root.settings.roles.allowWriteEvents)?a("el-button",{staticClass:"am-dialog-create",attrs:{type:"primary"},on:{click:e.showDialogEvent}},[a("i",{staticClass:"el-icon-plus"}),e._v(" "),a("span",{staticClass:"button-text"},[e._v(e._s(e.$root.labels.new_event))])]):e._e(),e._v(" "),e.$root.isLite||"wpamelia-employees"!==e.$router.currentRoute.name||!0!==e.$root.settings.capabilities.canWrite||!0!==e.$root.settings.capabilities.canWriteOthers?e._e():a("el-button",{staticClass:"am-dialog-create",attrs:{type:"primary"},on:{click:e.showDialogEmployee}},[a("i",{staticClass:"el-icon-plus"}),e._v(" "),a("span",{staticClass:"button-text"},[e._v(e._s(e.$root.labels.add_employee))])]),e._v(" "),"wpamelia-customers"===e.$router.currentRoute.name&&!0===e.$root.settings.capabilities.canWrite?a("el-button",{staticClass:"am-dialog-create",attrs:{type:"primary"},on:{click:e.showDialogCustomer}},[a("i",{staticClass:"el-icon-plus"}),e._v(" "),a("span",{staticClass:"button-text"},[e._v(e._s(e.$root.labels.add_customer))])]):e._e(),e._v(" "),a("el-popover",e._b({ref:"addLocationPop",attrs:{disabled:!e.$root.isLite}},"el-popover",e.$root.popLiteProps,!1),[a("PopLite")],1),e._v(" "),a("div",{directives:[{name:"popover",rawName:"v-popover:addLocationPop",arg:"addLocationPop"}]},["wpamelia-locations"===e.$router.currentRoute.name&&!0===e.$root.settings.capabilities.canWrite?a("el-button",{class:{"am-dialog-create":!0,"am-lite-disabled":e.$root.isLite},attrs:{type:"primary",disabled:e.$root.isLite},on:{click:e.showDialogLocation}},[a("i",{staticClass:"el-icon-plus"}),e._v(" "),a("span",{staticClass:"button-text"},[e._v(e._s(e.$root.labels.add_location))])]):e._e()],1),e._v(" "),"wpamelia-services"===e.$router.currentRoute.name&&e.categoriesTotal>0&&!0===e.$root.settings.capabilities.canWrite&&"services"===e.bookableType?a("el-button",{staticClass:"am-dialog-create",attrs:{type:"primary"},on:{click:e.showDialogService}},[a("i",{staticClass:"el-icon-plus"}),e._v(" "),a("span",{staticClass:"button-text"},[e._v(e._s(e.$root.labels.add_service))])]):e._e(),e._v(" "),a("transition",{attrs:{name:"fade"}},[a("div",{directives:[{name:"popover",rawName:"v-popover:addPackagePop",arg:"addPackagePop"}]},[a("el-popover",e._b({ref:"addPackagePop",attrs:{disabled:!e.$root.isLite}},"el-popover",e.$root.popLiteProps,!1),[a("PopLite")],1),e._v(" "),"wpamelia-services"===e.$router.currentRoute.name&&e.packagesTotal>=0&&!0===e.$root.settings.capabilities.canWrite&&"packages"===e.bookableType?a("el-button",{class:{"am-dialog-create":!0,"am-lite-disabled":e.$root.isLite},attrs:{type:"primary"},on:{click:e.showDialogPackage}},[a("i",{staticClass:"el-icon-plus"}),e._v(" "),a("span",{staticClass:"button-text"},[e._v(e._s(e.$root.labels.add_package))])]):e._e()],1)]),e._v(" "),a("transition",{attrs:{name:"fade"}},[a("div",{directives:[{name:"popover",rawName:"v-popover:addResourcePop",arg:"addResourcePop"}]},[a("el-popover",e._b({ref:"addResourcePop",attrs:{disabled:!e.$root.isLite}},"el-popover",e.$root.popLiteProps,!1),[a("PopLite")],1),e._v(" "),"wpamelia-services"===e.$router.currentRoute.name&&!0===e.$root.settings.capabilities.canWrite&&"resources"===e.bookableType?a("el-button",{class:{"am-dialog-create":!0,"am-lite-disabled":e.$root.isLite},attrs:{type:"primary"},on:{click:function(t){return e.showDialogResource()}}},[a("i",{staticClass:"el-icon-plus"}),e._v(" "),a("span",{staticClass:"button-text"},[e._v(e._s(e.$root.labels.add_resource))])]):e._e()],1)]),e._v(" "),a("transition",{attrs:{name:"fade"}},[a("div",{directives:[{name:"popover",rawName:"v-popover:addCouponPop",arg:"addCouponPop"}]},[a("el-popover",e._b({ref:"addCouponPop",attrs:{disabled:!e.$root.isLite}},"el-popover",e.$root.popLiteProps,!1),[a("PopLite")],1),e._v(" "),"wpamelia-finance"===e.$router.currentRoute.name&&e.addNewCouponBtnDisplay&&!0===e.$root.settings.capabilities.canWrite?a("el-button",{class:{"am-dialog-create":!0,"am-lite-disabled":e.$root.isLite},attrs:{type:"primary"},on:{click:e.showDialogCoupon}},[a("i",{staticClass:"el-icon-plus"}),e._v(" "),a("span",{staticClass:"button-text"},[e._v(e._s(e.$root.labels.new_coupon))])]):e._e()],1)]),e._v(" "),a("transition",{attrs:{name:"fade"}},["wpamelia-cf"===e.$router.currentRoute.name&&e.addNewCustomFieldBtnDisplay?a("el-button",{staticClass:"am-dialog-create",attrs:{type:"primary"},on:{click:e.showDialogCustomFields}},[a("i",{staticClass:"el-icon-plus"}),e._v(" "),a("span",{staticClass:"button-text"},[e._v(e._s(e.$root.labels.add_custom_field))])]):e._e()],1),e._v(" "),"wpamelia-dashboard"===e.$router.currentRoute.name?a("div",{staticClass:"v-calendar-column"},[a("div",{staticClass:"el-form-item__content"},[a("v-date-picker",{attrs:{mode:"range","popover-visibility":"focus","popover-direction":"bottom","popover-align":"right","tint-color":"#1A84EE","show-day-popover":!1,"input-props":{class:"el-input__inner"},"is-expanded":!1,"is-required":!0,"input-class":"el-input__inner",formats:e.vCalendarFormats,"is-double-paned":!0},on:{input:e.changeFilter},model:{value:e.params.dates,callback:function(t){e.$set(e.params,"dates",t)},expression:"params.dates"}})],1)]):e._e(),e._v(" "),"wpamelia-calendar"===e.$router.currentRoute.name?a("div",{staticClass:"am-calendar-header-filters"},[a("el-form",{staticClass:"demo-form-inline",attrs:{inline:!0}},[a("el-form-item",{attrs:{label:e.$root.labels.services+":"}},[a("el-select",{attrs:{multiple:"",filterable:"","collapse-tags":"",loading:!e.fetched,placeholder:e.$root.labels.all_services},on:{change:e.changeFilter},model:{value:e.params.services,callback:function(t){e.$set(e.params,"services",t)},expression:"params.services"}},e._l(e.categories,function(t){return a("div",{key:t.id},[a("div",{staticClass:"am-drop-parent",on:{click:function(a){return e.selectAllInCategory(t.id)}}},[a("span",[e._v(e._s(t.name))])]),e._v(" "),e._l(t.serviceList,function(e){return a("el-option",{key:e.id,staticClass:"am-drop-child",attrs:{label:e.name,value:e.id}})})],2)}),0)],1),e._v(" "),a("el-form-item",{directives:[{name:"show",rawName:"v-show",value:e.locations.length,expression:"locations.length"}],attrs:{label:e.$root.labels.locations+":"}},[a("el-select",{attrs:{multiple:"",clearable:"","collapse-tags":"",placeholder:e.$root.labels.all_locations,loading:!e.fetched},on:{change:e.changeFilter},model:{value:e.params.locations,callback:function(t){e.$set(e.params,"locations",t)},expression:"params.locations"}},e._l(e.locations,function(e){return a("el-option",{key:e.id,attrs:{label:e.name,value:e.id}})}),1)],1)],1),e._v(" "),"wpamelia-calendar"===e.$router.currentRoute.name&&("admin"===e.$root.settings.role||"manager"===e.$root.settings.role||"provider"===e.$root.settings.role&&e.$root.settings.roles.allowWriteAppointments)?a("el-button",{staticClass:"am-dialog-create",attrs:{type:"primary"},on:{click:e.showDialogAppointment}},[a("i",{staticClass:"el-icon-plus"}),e._v(" "),a("span",{staticClass:"button-text"},[e._v(e._s(e.$root.labels.new_appointment))])]):e._e()],1):e._e(),e._v(" "),e.oldCustomize&&"wpamelia-customize"===e.$router.currentRoute.name?a("div",{staticClass:"am-calendar-header-filters"},[a("el-button",{staticClass:"am-dialog-create",attrs:{type:"primary"},on:{click:e.showMainCustomize}},[a("span",{staticClass:"button-text"},[e._v(e._s(e.$root.labels.go_back))])])],1):e._e()],1)],1)],1)},staticRenderFns:[]}}});