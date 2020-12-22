<form wire:submit.prevent="register" class="" action="index.html" method="post">

    <div class="">
        <label for="name">Name</label>
        <input wire:model="name" type="text" name="name" id="name" value="">
    </div>
    <div class="">
        <label for="email">Email</label>
        <input wire:model="email" type="text" name="email" id="email" value="">
    </div>
    <div class="">
        <label for="password">Password</label>
        <input wire:model="password" type="password" name="password" id="password" value="">
    </div>
    <div class="">
        <label for="passwordConfirmation">Password Confirmation</label>
        <input wire:model="passwordConfirmation" type="password" name="passwordConfirmation" id="passwordConfirmation" value="">
    </div>

    <div class="">
        <input type="submit" name="" value="Register">
    </div>
</form>
