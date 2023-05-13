<div style="background: #aaffcc;padding:20;width:240px">
    <h5>Calculator Component</h5>
    <form wire:submit.prevent="multiply">
        First<br/>
        <input type="text" wire:model="n1" />
        <br/>
        @error('n1')
            {{ $message }}
        @enderror
        <br/>Second<br/>
        <input type=text wire:model="n2" />
        <br/>
        @error('n2')
            {{ $message }}
        @enderror
        <br /> <br />
        <button type="submit">Multiply</button>
    </form>
    {{ $result }}
</div>
