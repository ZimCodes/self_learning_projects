using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Strategy
{
    class Duck
    {
        IQuackBehavior quack;
        public Duck(IQuackBehavior quack)
        {
            this.quack = quack;
        }
        public string Quack()
        {
            return this.quack.Quack();
        }
    }
}
