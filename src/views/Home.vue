<template>
  <div class="Home">
    	<div class="Home-Content">
    		<div class="Home-TitleBlock">
    			<div class="Home-Title">Список пользователей</div>
    			<div class="Home-Btn" @click="addUser">Добавить</div>
    		</div>
				<div class="Home-TitleMessage" v-if="one">Данные успешно добавлены!</div>
    		<div class="Home-TitleMessage" v-if="one">Данные успешно изменены!</div>
    		<div class="Home-TitleMessage" v-if="one">Данные успешно удалены!</div>
    		<div class="Home-TitleMessage Home-TitleMessage_Error" v-if="one">Произошла ошибка!</div>
    		<div class="Home-List">
    			<div class="Home-Item">ID</div>
    			<div class="Home-Item">Имя</div>
    			<div class="Home-Item">Email</div>
    			<div class="Home-Item">Телефон</div>
    			<div class="Home-Item">Добавить</div>
    			<div class="Home-Item">Удалить</div>
    		</div>
    		<div class="Home-List Home-List_Info">
    			<div class="Home-Item">1</div>
    			<div class="Home-Item">uuu</div>
    			<div class="Home-Item">kl@mail.ru</div>
    			<div class="Home-Item">90559543343</div>
    			<div class="Home-Item">
    				<div class="Home-Btn Home-Btn_Small" @click="addEdit">Добавить</div>
    			</div>
    			<div class="Home-Item">
    				<div class="Home-Btn Home-Btn_Small" @click="Delete">Удалить</div>
    			</div>
    		</div>
    	</div>
    	<div class="Home-Popup" v-if="showAdd">
    		<div class="Home-User">
    			<div class="Home-UserTitle">Добавить Пользователя</div>
    			<div class="Home-UserClose" @click="closeUser">
    				<img src="@/assets/images/close.svg" alt="Img">
    			</div>
					<form class="Home-UserForm">
						<div class="Home-UserInput">
							<input class="Home-Input" type="text" placeholder="Ведите имя">
							<div class="Home-Error">Поле не должно быть пустым</div>
						</div>
						<div class="Home-UserInput">
							<input class="Home-Input" type="text" placeholder="Ведите email">
							<div class="Home-Error">Поле не должно быть пустым</div>
						</div>
						<div class="Home-UserInput">
							<input class="Home-Input" type="text" placeholder="Ведите телефон">
							<div class="Home-Error">Поле не должно быть пустым</div>
						</div>
							<button type="sunmit" class="Home-Btn Home-Btn_Small">Добавить</button>
					</form>
    		</div>
    	</div>
    	<div class="Home-Popup" v-if="showEdit">
    		<div class="Home-User">
    			<div class="Home-UserTitle">Редактировать данные</div>
    			<div class="Home-UserClose" @click="closeEdit">
    				<img src="@/assets/images/close.svg" alt="Img">
    			</div>
					<form class="Home-UserForm">
						<div class="Home-UserInput">
							<input class="Home-Input" type="text" placeholder="Ведите имя">
							<div class="Home-Error">Поле не должно быть пустым</div>
						</div>
						<div class="Home-UserInput">
							<input class="Home-Input" type="text" placeholder="Ведите email">
							<div class="Home-Error">Поле не должно быть пустым</div>
						</div>
						<div class="Home-UserInput">
							<input class="Home-Input" type="text" placeholder="Ведите телефон">
							<div class="Home-Error">Поле не должно быть пустым</div>
						</div>
							<button type="sunmit" class="Home-Btn Home-Btn_Small">Добавить</button>
					</form>
    		</div>
    	</div>
    	<div class="Home-Popup" v-if="showDelete">
    		<div class="Home-User">
    			<div class="Home-UserTitle">Удалить данные</div>
    			<div class="Home-UserClose" @click="closeDelete">
    				<img src="@/assets/images/close.svg" alt="Img">
    			</div>
    			<div class="Home-Delete">
    				<div class="Home-Btn Home-Btn_Small">Да</div>
    				<div class="Home-Btn Home-Btn_Small" @click="closeDelete">Нет</div>
    			</div>
    		</div>
    	</div>
  </div>
</template>

<style lang="stylus" scoped>
.Home
	&-Content
		max-width 1200px
		margin 0 auto
		padding-top 50px
		position relative
	&-TitleBlock
		display flex
		justify-content space-between
		align-items center
		padding-bottom 10px
		border-bottom 1px solid #000
		margin-bottom 40px
	&-Title
		font-size 24px
	&-Btn
		padding 10px 20px
		background #008B8B
		color #fff
		border-radius 3px
		font-size 18px
		box-sizing border-box
		cursor pointer
		&_Small
			font-size 14px
			padding 0px
			width 100px
			height 35px
			line-height 35px
			margin 0 auto
			margin-top 6px
			border-radius 3px
			color #fff
			text-align center
			border none
	&-List
		display flex
		justify-content space-around
		color #fff
		align-items center
		background #00f
		&_Info
			background #ddd
			color #000
			padding 0px
	&-Item
		width 25%
		text-align center
		border-right 2px solid #fff
		box-sizing border-box
		border-bottom 2px solid #fff
		height 50px
		line-height 50px
		&:last-child
			border-right 0px
	&-Popup
		position fixed
		width 100%
		height 100%
		background rgba(0, 0, 0, 0.5)
		left 0
		top 0
	&-User
		width 400px
		background #fff
		box-sizing border-box
		padding-bottom 5px
		border-radius 2px
		position absolute
		border-radius 2px
		top 50%
		left 50%
		margin-right -50%
		transform translate(-50%, -50%)
		overflow hidden
		min-height 300px
	&-UserTitle
		font-size 18px
		width 100%
		background #00f
		color #fff
		padding 10px 15px
		box-sizing border-box
	&-UserClose
		position absolute
		top 13px
		right 15px
		cursor pointer
		img
			height 15px
	&-UserForm
		padding 20px 15px
		padding-bottom 10px
		text-align center
	&-UserInput
		position relative
	&-Input
		width 100%
		height 35px
		box-sizing border-box
		padding 0px 15px
		border 1px solid #ddd
		border-radius 2px
		margin-bottom 25px
	&-Error
		color red
		font-size 14px
		position absolute
		top 37px
	&-Delete
		display flex
		width 245px
		margin 0 auto
		padding-top 50px
	&-TitleMessage
		padding 7px
		background #006400
		position absolute
		top 107px
		width 100%
		color #fff
		box-sizing border-box
		&_Error
			background #DC143C

</style>
<script>


export default {
  name: 'home',
  data: () => ({
  	showAdd: false,
  	showEdit: false,
  	showDelete: false
  }),
  methods: {
  	addUser() {
  		this.showAdd = true
  	},
  	closeUser() {
  		this.showAdd = false
  	},
  	addEdit() {
  		this.showEdit = true
  	},
  	closeEdit() {
  		this.showEdit = false
  	},
  	Delete() {
  		this.showDelete = true
  	},
  	closeDelete() {
  		this.showDelete = false
  	}
  }
}
</script>
