import{C as s}from"./index.c9bc1c73.js";import{e as o}from"./index.f16c040b.js";import{n as a}from"./vueComponentNormalizer.58b0a173.js";var i=function(){var n=this,t=n.$createElement,r=n._self._c||t;return n.isUnlicensed||n.showAlert?r("core-alert",{attrs:{type:"red"}},[n._v(" "+n._s(n.strings.thisFeatureRequires)+" "),r("strong",[n._v(n._s(n.$addons.currentPlans(this.addon)))])]):n._e()},u=[];const l={components:{CoreAlert:s},props:{addon:String},data(){return{strings:{thisFeatureRequires:this.$t.__("This feature requires one of the following plans:",this.$td)}}},computed:{...o(["isUnlicensed"]),showAlert(){return this.$addons.requiresUpgrade(this.addon)&&this.$addons.currentPlans(this.addon)}}},e={};var c=a(l,i,u,!1,_,null,null,null);function _(n){for(let t in e)this[t]=e[t]}const m=function(){return c.exports}();export{m as R};
