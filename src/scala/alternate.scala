val alternatives = List("true", "false", "null", "äö")

if (args.length < 1) {
  exit
}
val wanted = args(0)
val indexOfAlternative = alternatives.indexOf(wanted)
val alternativeExists = indexOfAlternative > -1
if (!alternativeExists) {
  exit
}
val nextAlternative = 
  if (indexOfAlternative != alternatives.length - 1)
    alternatives(indexOfAlternative + 1)
  else 
    alternatives(0)

println(nextAlternative)
