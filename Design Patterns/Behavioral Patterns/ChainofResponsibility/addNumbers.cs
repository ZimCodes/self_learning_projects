using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ChainofResponsibility
{
    class addNumbers:Chain
    {
        private Chain nextinChain;

        public override void calculate(Number number)
        {
            
            if (number.calculationWanted.ToLower() == "add")
            {
                Console.WriteLine(number.num1 + " + " + number.num2 + " = " + (number.num1 + number.num2));
            }
            else
            {
                nextinChain.calculate(number);
            }
        }

        public override void setNextChain(Chain chain)
        {
            this.nextinChain = chain;
        }
    }
}
