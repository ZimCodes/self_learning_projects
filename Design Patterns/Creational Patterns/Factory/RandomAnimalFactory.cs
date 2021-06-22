using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Factory
{
    /// <summary>
    ///A factory that randomly generates a product
    /// </summary>
    class RandomAnimalFactory : IAnimalFactory
    {
        public IAnimal FactoryMethod()
        {
            return new Horse();
            /*or
             * return new Cat();*/
        }
    }
}
