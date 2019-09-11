<template>
  <div class="Home">
    	<div class="Home-Content">
    		<div class="Home-TitleBlock">
    			<div class="Home-Title">Список пользователей</div>
    			<div class="Home-Btn">Добавить</div>
    		</div>
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
    				<div class="Home-Btn Home-Btn_Small">Добавить</div>
    			</div>
    			<div class="Home-Item">
    				<div class="Home-Btn Home-Btn_Small">Удалить</div>
    			</div>
    		</div>
    	</div>
    	<div class="Home-Popup">
    		<div class="Home-User">
    			<div class="Home-UserTitle">Добавить Пользователя</div>
    			<div class="Home-UserClose">
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
					</form>
					<div class="Home-Btn Home-Btn_Small">Добавить</div>
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
		padding-bottom 20px
		position relative
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
	&-Input
		width 100%
		height 30px
		box-sizing border-box
		padding 0px 15px
		border 1px solid #ddd
		border-radius 2px

</style>
<script>


export default {
  name: 'home'
}
</script>
