using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Flyweight
{
    abstract class Insect
    {
        protected string Color;
        public Insect(string color)
        {
            Color = color;
        }
        protected abstract string Move();
        protected abstract bool canMetamorphosize();
        public override string ToString()
        {
            return string.Format("{0} Color: {1}", this.GetType(), Color);
        }
    }
}
