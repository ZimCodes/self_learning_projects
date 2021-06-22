using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Factory
{
    class Cat : IAnimal
    {
        public string Communication()
        {
            return "Meow! Meow!";
        }

        public string WayOfTravel()
        {
            return "Walking";
        }
    }
}
