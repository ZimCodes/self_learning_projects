using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Builder
{
    class Director
    {
        RobotBuilder robotbuilder;

        public Director(RobotBuilder builder)
        {
            robotbuilder = builder;
        }
        public Robot getRobot()
        {
            return this.robotbuilder.robot;
        }
        public void BuildRobot()
        {
            robotbuilder.buildRobotHead();
            robotbuilder.buildRobotArms();
            robotbuilder.buildRobotTorso();
            robotbuilder.buildRobotLegs();
        }
    }
}
