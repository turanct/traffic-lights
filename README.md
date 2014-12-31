Traffic Lights
=======================================

```
               |       |
               |   1   |
               |       |
_______________|       |_______________

        4                     2
_______________         _______________
               |       |
               |   3   |
               |       |
               |       |
```


Basic functionality
---------------------------------------

- Traffic lights are not limited to `green` - `orange` - `red` sequences. Even on one crossroads, there can be different sequences per light. e.g.: pedestrian lights have `green` - `red` sequences, while car lights have `green for left` - `green` - `orange` - `red`.
- Optionally, when a sensor is available, busses can change a `red` light to a `green` one in their direction, when the minimum `green` time for other directions has passed.
- Optionally, when a button is available, pedestrians can change a `red` light to a `green` one in their direction, when the minimum `green` time for other directions has passed.
- Optionally, when a camera or sensor is available, a certain treshold of waiting cars can change a `red` light to a `green` one in their direction, when the minimum `green` time for other directions has passed.
- Optionally, when there are speed traps on the crossroads, they should get notified of the current status of the light in their direction.
- There should be an emergency mode, so that all `green` car lights blink `orange`.
- Configuration of the lights & sensors should be done in a JSON file. We might later opt for YAML files.


Lights
---------------------------------------

### Cars
- `green` - `orange` - `red`
- Custom
- `blinking orange`

### Bicycles
- `green` - `orange` - `red`
- `green` - `red`

### Pedestrians
- `green` - `red`


Sequence Example
---------------------------------------

```
C 1  G G G G O R R R R R R R
P 1  G G G G R R R R R R R R
C 2  R R R R R R G G G G O R
P 2  R R R R R R G G G G R R
C 3  G G G G O R R R R R R R
P 3  G G G G R R R R R R R R
C 4  R R R R R R G G G G O R
P 4  R R R R R R G G G G R R
B 1  E E E E E E E E E E E E
```
- C1 = Car light one
- P1 = Pedestrian light one
- B1 = Blinking light one
- G = `green`
- O = `orange`
- R = `red`
- E = `blinking orange`
