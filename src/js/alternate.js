#!/usr/local/bin/node

var wanted = process.argv[2]

var wordLists = [
    ['true', 'false', 'null'], 
    ['static', 'ALTERNATE_DELETE'],
    //@TODO adds static again and again. Need word matching?
    ['function', 'static function'],
    ['public', 'private', 'protected'],
    ['extends', 'implements'],
    ['$this->', 'self::'],
    ['->', '::'],
    ['class', 'trait']
]

wordLists.forEach(function(words) {
    var matchIndex = words.indexOf(wanted)
    if (matchIndex > -1) {
        var lastWordOnList = (matchIndex + 1) >= words.length
        if (lastWordOnList) {
            process.stdout.write(words[0])
        } else {
            var nextWord = words[matchIndex + 1]
            process.stdout.write(nextWord)
        }
    }
})
