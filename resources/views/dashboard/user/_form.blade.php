@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="Nombre" value="{{ old('name', $user->name) }}">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" autocomplete="off" placeholder="Email" value="{{ old('email', $user->email) }}">
</div>
@if ($pasw)
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" name="password" id="password" autocomplete="off" placeholder="Contraseña" value="{{ old('password', $user->password) }}">
    </div>
@endif
<button type="submit" class="btn btn-primary">Enviar</button>
