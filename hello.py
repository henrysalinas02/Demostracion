""" x = 5
y = "John"

print(x)
print(y)"""

"""#casting 
x = str(3)
y = int(3)
z = float(3)

print(x)
print(y)
print(z)"""

#Consórte el tipo
#Puede obtener el tipo de datos de una variable con el type()función
"""x = 5
y = "John"
print(type(x))
print(type(y))"""

#Citas individuales o dobles?
#Las variables de cuerda se pueden declarar ya sea mediante comillas individuales o dobles:

"""x = "John"
# is the same as
x = 'John'"""

#Asignar valores múltiples. Python le permite asignar valores a múltiples variables en una línea:
"""x, y, z = "Orange", "Banana", "Cherry"
print(x)
print(y)
print(z)"""

#Y puede asignar el mismo valor a múltiples variables en una sola línea:
"""x = y = z = "Orange"
print(x)
print(y)
print(z)"""

#Desempaquetar una lista:
"""fruits = ["apple", "banana", "cherry"]
x, y, z = fruits
print(x)
print(y)
print(z)"""

#Variables globales
#Variables que se crean fuera de una función (como en todos los ejemplos en las páginas anteriores) 
# se conocen como variables globales.
#Las variables globales pueden ser utilizadas por todos, tanto dentro de funciones y fuera.

"""x = "Prueba"

def myfunc():
    print("Python es " + x)

myfunc()"""

#Ejemplo
#Crear una variable dentro de una función, con el mismo nombre que el global variable variable

x = "prueba"

def myfunc():
    x ="fantastico"
    print("python is " + x)
    
    myfunc()
    
    print("python is" + x)

