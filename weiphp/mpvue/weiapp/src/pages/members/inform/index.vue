<template>
  <div class="inform">

     <van-collapse v-model="activeNames">

      <van-collapse-item
        :title="item.title"
        :name="index"
        icon="point-gift-o"
        v-for="(item,index) in datas"
        :key="index"
      >
       <div class="s-black f-font-md" v-html="item.content">

       </div>
       <p class="f-font-sm s-gray">发布时间：{{item.cTime}}</p>
      </van-collapse-item>

    </van-collapse>
    
  </div>
</template>

<script>
import { post, host, timeChange } from "@/utils";
import { api } from "@/utils/api";
export default {
  data() {
    return {
      datas: [],
      activeNames: []
    };
  },
  components: {
  },
  computed: {
    
  },

  methods: {
    async getData() {
      const _this = this
      const data = await api.getInform()
      console.log(data)
      this.datas = data.list
      this.datas.map((item) => {
        item.cTime = timeChange(item.cTime, true)
        _this.activeNames.push("1")
      })
    }
  },

  onLoad() {
    this.getData()
  }
};
</script>
<style lang="scss" scoped>
.inform {
  /deep/ .van-icon-point-gift-o:before{color: $red}
  .van-collapse-item {margin-bottom: 10px;}
}
</style>
