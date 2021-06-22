using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Bridge
{
    class Triangle:Shape
    {
        public Triangle(ColorAPI colorapi) : base(colorapi)
        {
            
        }

        protected override Shape Drawshape()
        {
            return this;
        }
        public override string getShape()
        {
            return string.Format(" Shape Type: {0}, Color:{1}", Drawshape(),color.ToString());
        }
    }
}
