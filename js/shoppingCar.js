/**
 * Created by Administrator on 2017/8/15.
 */
new Vue({
    el: "#app",
    data: {
        total: 0,
        cb: false,

        list: [{bol: false, information: "《山海经》图文版", price: 152.00, number: 1, amount: 152.00},
            {bol: false, information: "《偷影子的人》", price: 27.00, number: 1, amount: 27.00},
            {bol: false, information: "瑞士军刀", price: 536.00, number: 1, amount: 536.00},
            {bol: false, information: "《解忧杂货铺》", price: 52.00, number: 1, amount: 52.00},
            {bol: false, information: "复古圆领毛衣", price: 298.00, number: 2, amount: 596.00}]
    },
    methods: {
//            增加商品
        add: function (x, index) {

            var now_num = x.number;
            var price = x.price;
            now_num++;

            var amount = this.fn(now_num, price);

            this.list[index].number = now_num;
            this.list[index].amount = amount;
            if (x.bol) {
                this.fm(price)
            }
        },
//            减少商品
        reduction: function (x, index) {
            var now_num = x.number;
            var price = x.price;

            if (now_num > 0) {
                now_num--;
                var amount = this.fn(now_num, price);
                this.list[index].number = now_num;
                this.list[index].amount = amount;
                if (x.bol) {
                    this.fm(0 - price)
            }

            }

        },
//            计算金额
        fn: function (now_num, price) {
            var amount = now_num * price;
            return amount;
        },
//            选择
        check: function (x) {
            var amount = x.amount;
            if (!x.bol) {
                amount = 0 - amount;
            }
            this.fm(amount)
        },
//            计算总金额
        fm: function (amount) {

            var all = this.total;
            all = all + amount;


            if (all >= 0) {
                this.total = all;
            } else {
                this.total = 0;
            }


        }
        ,
//            删除
        del: function (x,index) {
            this.list.splice(index, 1)
        },
//            全选
        chall: function () {
            var bool=this.cb;
            for (var i = 0; i < this.list.length; i++) {
                if(this.list[i].bol){
                    this.list[i].bol=false;
                    this.check(this.list[i]);
                }
                this.list[i].bol = this.cb;
                this.check(this.list[i]);
            }
            this.cb = bool;

        }

    }

})