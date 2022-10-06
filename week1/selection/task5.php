




# fun calc enhanced exercise
import math
def add(num1, num2):
    result = (num1 + num2)
    print("{} + {}: {}".format(num1, num2, result))
def sub(num1, num2):
    result = (num1 - num2)
    print("{} - {}: {}".format(num1, num2, result))
def multiply(num1, num2):
    result = (num1 * num2)
    print("{} * {}: {}".format(num1, num2, result))
def division(num1, num2):
    result = (num1 / num2)
    print("{} / {}: {:.2f}".format(num1, num2, result))
def restOfDivision(num1, num2):
    result = (num1 % num2)
    print("{} % {}: {}".format(num1, num2, result))
while True:
    try:
        num1 = float(input("\nType the first number: "))
        num2 = float(input("Type the second number: "))

        print("\n==== Menu ======")
        print("1. Add")
        print("2. Subtract")
        print("3. Multiply")
        print("4. Divide")
        print("5. Remainder")
        while True:
            try:
                selection = int(input("\nType your number selection: "))
                if not (0 < selection < 5): raise Exception
                if selection == 1:
                    add(num1, num2)
                    exit()
                elif selection == 2:
                    sub(num1, num2)
                    exit()
                elif selection == 3:
                    multiply(num1, num2)
                    exit()
                elif selection == 4:
                    division(num1, num2)
                    exit()
                elif selection == 5:
                    restOfDivision(num1, num2)
                    exit()
                else:
                    print("No operation selected.")
            except ValueError:
                print("Requires integer value.")
            except Exception:
                print("The value must be in the range 1-5")
    except ValueError:
        print("Requires an float.")