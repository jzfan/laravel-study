<pre>
<code>
    public function getFirstNameAttribute($value)
    {
        $value->each( function () {
            dd($value);
        })
        return ucfirst($value);
    }
</code>
</pre>